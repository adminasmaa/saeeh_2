<?php

namespace App\Http\Controllers\Frontend\Investor;

use Response;


use App\Http\Controllers\Controller;
use App\Models\Aqar;
use App\Models\User;
use App\Models\Category;
use App\Models\AnotherRoom;
use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\AdsStatus;
use App\Models\AqarService;
use App\Models\AqarSections;
use App\Models\AqarBooking;
use Alert;
use App\Repositories\Interfaces\AqarRepositoryInterface;
use App\Repositories\Eloquent\AqarRepository;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;



class AqarInvstController extends Controller
{


    protected $AqarRepository;
 
    public function __construct()
    {
        $this->AqarRepository=new AqarRepository();
    }

    public function index(Request $request)
    {

        $aqars = Aqar::with('category','area','adsstatus')->where('user_id',Auth::id())
        ->when($request->search_id, function ($query) use($request) {
            $query->where('id','=',$request->search_id);
            
        })     
        ->paginate(10);
        return view('frontend.invest.all_aqars' , compact('aqars') );


    }


    public function show($id)
    {
    }


    public function create()
    {

        $users = User::whereNotNull('type')->where('active',1)->get();
        $categories = Category::where('type',1)->where('parent_id',1)->where('active',1)->get();
        $Area = Area::where('active',1)->get();
        $countries = Country::all();
        $adsStatus = AdsStatus::all();
        $cities = City::all();

        return view('frontend.invest.add_aqar' , compact('users', 'categories','Area', 'countries', 'cities', 'adsStatus') );


    }//end of create


    public function store(Request $request)
    {
        
      
        $data['person_num'] = $request['person_num'];
        $data['price'] = $request['price'];
      
        $request['changed_price']=json_encode($data)!=null?json_encode($data, JSON_NUMERIC_CHECK):json_encode([]);
        $request['user_id']=Auth::id();
        $request_data = $request->except(['main_image','images','videos','subservice','latitude','longitude']);
           
        $aqar = Aqar::create($request_data);

        if ($request->hasFile('main_image')) {

            UploadImage('images/aqars/','main_image', $aqar, $request->file('main_image'));

        }

        if ($files=$request->file('images')) {
            //$images = $request->file('images');
            // foreach ($images as $key => $files) {
            //     $destinationPath = 'images/places/';
            //     $file_name = $_FILES['images']['name'][$key];
            //     $files->move($destinationPath, $file_name);
            //     $data1[] = $_FILES['images']['name'][$key];
            //     $aqar->images = implode(',',$data);
            //     $aqar->save();
            // }
            foreach($files as $file){
                $destinationPath = 'images/aqars/';
                $name=time().'.'.$file->getClientOriginalExtension();
                $file->move($destinationPath,$name);
                $images[]=$name;
            }
            $aqar->images = implode(',',$images);
                 $aqar->save();
        }

        if ($request->hasFile('videos')) {
                $thumbnail = $request->file('videos');
                $destinationPath = 'images/aqars/videos/';
                $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->move($destinationPath, $filename);
                $aqar->videos = $filename;
                $aqar->save();
            
            }
        $totalrooms=0;
        if(!empty($request->subservice)){
        foreach ($request->subservice as $subserv) {
            $arr=explode('-',$subserv);
            AqarSections::create([
                'section_id' => $arr[0],
                'sub_section_id' => $arr[1],
                'aqar_id'=>$aqar->id

            ]);
            if($arr[0]==6 || $arr[0]==18){
                $totalrooms +=$arr[2];
            }
           
           
        }
        $aqar->total_rooms=$totalrooms;
        $aqar->save();
    }
        if ($aqar) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('invst.aqars.index');

        }

     

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        $users = User::whereNotNull('type')->where('active',1)->get();
        $categories = Category::where('type',1)->where('parent_id',1)->where('active',1)->get();
        $Area = Area::where('active',1)->get();
        $countries = Country::all();
        $adsStatus = AdsStatus::all();
        $cities = City::all();
        $aqar=Aqar::find($id);
        $aqar['changed_price']=json_decode($aqar['changed_price']);

        return view('frontend.invest.add_aqar' , compact('users', 'categories','Area', 'countries', 'cities', 'adsStatus','aqar') );


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, $id)
    {
       
        $aqar = Aqar::find($id);
        $data['person_num'] = $request['person_num'];
        // $data['day_num'] = $request['day_num'];
        $data['price'] = $request['price'];
        $request['changed_price']=json_encode($data)!=null?json_encode($data, JSON_NUMERIC_CHECK):json_encode([]);

        $request_data = $request->except(['main_image', '_token', '_method', 'images','videos','subservice','latitude','longitude']);
        $aqar->update($request_data);


        if ($request->hasFile('main_image')) {

            UploadImage('images/aqars/','main_image', $aqar, $request->file('main_image'));
        }

        if ($files=$request->file('images')) {
            foreach($files as $file){
                $destinationPath = 'images/aqars/';
                $name=time().'.'.$file->getClientOriginalExtension();
                $file->move($destinationPath,$name);
                $images[]=$name;
            }
            $aqar->images = implode(',',$images);
                 $aqar->save();
           
        }
        if ($request->hasFile('videos')) {
            $thumbnail = $request->file('videos');
            $destinationPath = 'images/aqars/videos/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $aqar->videos = $filename;
            $aqar->save();
        
        }
        $services=AqarSections::where('aqar_id', $aqar->id)->get()->each(function($service){ $service->delete(); });
        $totalrooms=0;
        foreach ($request->subservice as $subserv) {
            $arr=explode('-',$subserv);
            AqarSections::create([
                'section_id' => $arr[0],
                'sub_section_id' => $arr[1],
                'aqar_id'=>$aqar->id

            ]);
            if($arr[0]==6 || $arr[0]==18){
                $totalrooms +=$arr[2];
            }
           
        }
        $aqar->total_rooms=$totalrooms;
        $aqar->save();
        if ($aqar) {
            Alert::success('Success', __('site.updated_successfully'));

            return redirect()->route('invst.aqars.index');
            session()->flash('success', __('site.updated_successfully'));
        } else {
            Alert::success('Success', __('site.update_faild'));

            return redirect()->route('invst.aqars.index');

        }


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy($id)
    {
        $Aqar =Aqar::find($id);

        return $this->AqarRepository->destroy($Aqar);


    }//end of destroy


    public function detailaqar($id)
    {

        $aqar = Aqar::find($id);
        $lat=$aqar->latitude;
        $long=$aqar->longitude;
        return view('frontend.invest.detailaqar', compact('aqar','lat','long'));


    }


    public function getsetting($id)
    { 
       $details = AqarService::setEagerLoads([])->join('aqar_setting', 'aqar_setting.detail_id', '=', 'aqar_details.id')
       ->where('category_id',$id)->where('display',1)->with('subservices')->get(); 
       $arr=[]; 
       return view('frontend.invest.details', compact('details','arr'));
    }

    public function getsetting1($id,$aqar_id)
    { 
       $details = AqarService::setEagerLoads([])->join('aqar_setting', 'aqar_setting.detail_id', '=', 'aqar_details.id')
       ->where('category_id',$id)->where('display',1)->with('subservices')->get();
       $aqar = Aqar::with('aqarSubSection')->find($aqar_id);
       $arr=[];
       foreach($aqar->aqarSubSection as $item){
        array_push($arr,$item->sub_section_id);
       }
      // return $arr;
       return view('frontend.invest.details', compact('details','aqar','arr'));
    }


    public function stop($id)
    {

        $success = Aqar::find($id)->update(['ads_status_id' => 3]);

        if ($success) {
            Alert::success('Success', __('site.stop_successfully'));
        } else {
                Alert::error('Error', __('site.stop_faild'));

        }

        return back();
    }

    public function active($id)
    {

        $success = Aqar::find($id)->update(['ads_status_id' => 1]);

        if ($success) {
            Alert::success('Success', __('site.active_successfully'));
        } else {
                Alert::error('Error', __('site.sactive_faild'));

        }

        return back();
    }

    



}
