<?php

namespace App\Http\Controllers\Frontend\Investor;

use Response;


use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\User;
use App\Models\Category;
use App\Models\AnotherRoom;
use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\AdsStatus;
use Alert;
use App\Repositories\Interfaces\CarRepositoryInterface;
use App\Repositories\Eloquent\CarRepository;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;



class CarInvstController extends Controller
{


    protected $CarRepository;
 
    public function __construct()
    {
        $this->CarRepository=new CarRepository();
    }

    public function index(Request $request)
    {

        $cars = Car::with('categories','subcategories')->where('user_id',Auth::id())
        ->when($request->search_id, function ($query) use($request) {
            $query->where('id','=',$request->search_id);
            
        })     
        ->paginate(10);
        return view('frontend.invest.all_cars' , compact('cars') );


    }


    public function show($id)
    {
    }


    public function create()
    {

        $users = User::whereNotNull('type')->where('active',1)->get();
        $categories = Category::where('type',2)->where('parent_id',2)->where('active',1)->get();
        $countries = Country::all();
        $adsStatus = AdsStatus::all();
        $cities = City::all();

        return view('frontend.invest.add_car' , compact('users', 'categories', 'countries', 'cities', 'adsStatus') );


    }//end of create


    public function store(Request $request)
    {
        
      
        $data['day_num'] = $request['day_num'];
        $data['price'] = $request['price'];
      
        $request['changed_price']=json_encode($data)!=null?json_encode($data, JSON_NUMERIC_CHECK):json_encode([]);
        $request['user_id']=Auth::id();
        $request_data = $request->except(['main_image_ads','images','videos']);

        $car = Car::create($request_data);

        if ($request->hasFile('main_image_ads')) {

            UploadImage('images/cars/','main_image_ads', $car, $request->file('main_image_ads'));

        }

        if ($files=$request->file('images')) {
            foreach($files as $file){
                $destinationPath = 'images/cars/';
                $name=time().'.'.$file->getClientOriginalExtension();
                $file->move($destinationPath,$name);
                $images[]=$name;
            }
            $car->images = implode(',',$images);
                 $car->save();
        }

        if ($request->hasFile('videos')) {
                $thumbnail = $request->file('videos');
                $destinationPath = 'images/cars/videos/';
                $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->move($destinationPath, $filename);
                $car->videos = $filename;
                $car->save();
            
            }
        if ($car) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('invst.cars.index');

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
        $categories = Category::where('type',2)->where('parent_id',2)->where('active',1)->get();
        $countries = Country::all();
        $adsStatus = AdsStatus::all();
        $cities = City::all();
        $car=Car::find($id);
        $car['changed_price']=json_decode($car['changed_price']);

        return view('frontend.invest.add_car' , compact('users', 'categories', 'countries', 'cities', 'adsStatus','car') );


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, $id)
    {
       
        $car = Car::find($id);
        $data['day_num'] = $request['day_num'];
        // $data['day_num'] = $request['day_num'];
        $data['price'] = $request['price'];
        $request['changed_price']=json_encode($data)!=null?json_encode($data, JSON_NUMERIC_CHECK):json_encode([]);

        $request_data = $request->except(['main_image_ads', '_token', '_method', 'images']);
        $car->update($request_data);


        if ($request->hasFile('main_image_ads')) {

            UploadImage('images/cars/','main_image_ads', $car, $request->file('main_image_ads'));
        }

        if ($files=$request->file('images')) {
            foreach($files as $file){
                $destinationPath = 'images/cars/';
                $name=time().'.'.$file->getClientOriginalExtension();
                $file->move($destinationPath,$name);
                $images[]=$name;
            }
            $car->images = implode(',',$images);
            $car->save();
           
        }
        if ($request->hasFile('videos')) {
            $thumbnail = $request->file('videos');
            $destinationPath = 'images/cars/videos/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $car->videos = $filename;
            $car->save();
        
        }
        
        if ($car) {
            Alert::success('Success', __('site.updated_successfully'));

            return redirect()->route('invst.cars.index');
            session()->flash('success', __('site.updated_successfully'));
        } else {
            Alert::success('Success', __('site.update_faild'));

            return redirect()->route('invst.cars.index');

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
        $Car =Car::find($id);

        return $this->CarRepository->destroy($Car);


    }//end of destroy
   

}
