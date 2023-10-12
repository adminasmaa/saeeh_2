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
use Alert;
use App\Repositories\Interfaces\AqarRepositoryInterface;
use App\Repositories\Eloquent\AqarRepository;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;


class AqarInvstController extends Controller
{


    protected $AqarRepository;
 
    public function __construct()
    {
        $this->AqarRepository=new AqarRepository();
    }

    public function index(AqarDataTable $AqarDataTable)
    {

        return $this->AqarRepository->getAll($AqarDataTable);

    }


    public function show($id)
    {
        return $this->AqarRepository->show($id);


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

        $request_data = $request->except(['main_image','images','videos','subservice']);

        $aqar = Aqar::create($request_data);

        if ($request->hasFile('main_image')) {

            UploadImage('images/aqars/','main_image', $aqar, $request->file('main_image'));

        }

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $key => $files) {
                $destinationPath = 'images/places/';
                $file_name = $_FILES['images']['name'][$key];
                $files->move($destinationPath, $file_name);
                $data[] = $_FILES['images']['name'][$key];
             //   $aqar->images = implode(',',$data);
             //   $aqar->save();
            }
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
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('invest.aqars.index');

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
        return $this->AqarRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, $id)
    {
       
        $Aqar = Aqar::find($id);
        $data['person_num'] = $request['person_num'];
        // $data['day_num'] = $request['day_num'];
        $data['price'] = $request['price'];
        $request['changed_price']=json_encode($data)!=null?json_encode($data, JSON_NUMERIC_CHECK):json_encode([]);
        return $this->AqarRepository->update($Aqar, $request);


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


    public function roomnumbers($id)
    {


        $roomnumbers = Aqar::distinct()->join('aqar_sections', 'aqars.id', '=', 'aqar_sections.aqar_id')->join('aqar_details', 'aqar_details.id', '=', 'aqar_sections.sub_section_id')->where('aqars.category_id', $id)->where('aqar_sections.section_id', '=', 6)->groupBy('aqars.id')->select( \DB::raw('SUM(aqar_details.name_ar) as total'))
        ->get()
        ->pluck('total', 'aqar_details.name_ar')
        ->toArray();
        return Response::json($roomnumbers);


    }

}
