<?php

namespace App\Repositories\Eloquent;


use App\Models\Aqar;
use App\Models\User;
use App\Models\Category;
use App\Models\AnotherRoom;
use App\Models\Area;
use App\Models\Floor;
use App\Models\FloorNumber;
use App\Models\Crew;
use App\Models\FreeService;
use App\Models\Service;
use App\Models\Bathroom;
use App\Models\Kitchen;
use App\Models\Laundry;
use App\Models\ConditionType;
use App\Models\CarPosition;
use App\Models\Pool;
use App\Models\City;
use App\Models\Country;
use App\Repositories\Interfaces\AqarRepositoryInterface as AqarRepositoryInterfaceAlias;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Alert;
class AqarRepository implements AqarRepositoryInterfaceAlias
{
    public function getAll($data)
    {

//        return $data->query();

        return $data->render('dashboard.aqars.index', [
            'title' => trans('site.aqars'),
            'model' => 'aqars',
            'count' => $data->count(),

        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.

        $users = User::all();
        $categories = Category::where('type',1)->where('active',1)->get();
        $AnotherRoom = AnotherRoom::where('active',1)->get();
        $Area = Area::where('active',1)->get();
        $Floor = Floor::where('active',1)->get();
        $FloorNumber = FloorNumber::where('active',1)->get();
        $Crew = Crew::where('active',1)->get();
        $Service = Service::where('active',1)->get();
        $FreeService = FreeService::where('active',1)->get();
        $Kitchen = Kitchen::where('active',1)->get();
        $Bathroom = Bathroom::where('active',1)->get();
        $Laundry = Laundry::where('active',1)->get();
        $ConditioningType = ConditionType::where('active',1)->get();
        $CarPosition=CarPosition::where('active',1)->get();
        $Pool=Pool::where('active',1)->get();
        $countries = Country::all();
        $cities = City::all();
        return view('dashboard.aqars.create', compact('users', 'categories','AnotherRoom','Area','Bathroom','ConditioningType','Floor','FloorNumber','Service','FreeService','Crew','Kitchen','Laundry','CarPosition','Pool', 'countries', 'cities'));
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.

        $aqar = Aqar::find($Id);
        $aqar['floor_id'] = json_decode($aqar['floor_id']);
        $aqar['floor_number_id'] = json_decode($aqar['floor_number_id']);
        $aqar['service_id'] = json_decode($aqar['service_id']);
        $aqar['free_service_id'] = json_decode($aqar['free_service_id']);
        $aqar['crew_id'] = json_decode($aqar['crew_id']);
        $aqar['kitchen_id'] = json_decode($aqar['kitchen_id']);
        $aqar['bathroom_id'] = json_decode($aqar['bathroom_id']);
        $aqar['laundry_id'] = json_decode($aqar['laundry_id']);
        $aqar['another_room_id'] = json_decode($aqar['another_room_id']);
        $aqar['conditioning_type_id'] = json_decode($aqar['conditioning_type_id']);
        $aqar['changed_price']=json_decode($aqar['changed_price']);
        $aqar['car_position_id']=json_decode($aqar['car_position_id']);
        $aqar['swimmingpool']=json_decode($aqar['swimmingpool']);
        $users = User::all();
        $categories = Category::where('type',1)->where('active',1)->get();
        $AnotherRoom = AnotherRoom::where('active',1)->get();
        $Area = Area::where('active',1)->get();
        $Floor = Floor::where('active',1)->get();
        $FloorNumber = FloorNumber::where('active',1)->get();
        $Crew = Crew::where('active',1)->get();
        $Service = Service::where('active',1)->get();
        $FreeService = FreeService::where('active',1)->get();
        $Kitchen = Kitchen::where('active',1)->get();
        $Bathroom = Bathroom::where('active',1)->get();
        $Laundry = Laundry::where('active',1)->get();
        $ConditioningType = ConditionType::where('active',1)->get();
        $CarPosition=CarPosition::where('active',1)->get();
        $Pool=Pool::where('active',1)->get();
        $countries = Country::all();
        $cities = City::all();
        return view('dashboard.aqars.edit', compact('aqar', 'users', 'categories','AnotherRoom','Area','Bathroom','ConditioningType','Floor','FloorNumber','Service','FreeService','Crew','Kitchen','Laundry','CarPosition','Pool', 'countries', 'cities'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.

        $aqar = Aqar::find($Id);
        $aqar['floor_id'] = json_decode($aqar['floor_id']);
        $aqar['floor_number_id'] = json_decode($aqar['floor_number_id']);
        $aqar['service_id'] = json_decode($aqar['service_id']);
        $aqar['free_service_id'] = json_decode($aqar['free_service_id']);
        $aqar['crew_id'] = json_decode($aqar['crew_id']);
        $aqar['kitchen_id'] = json_decode($aqar['kitchen_id']);
        $aqar['bathroom_id'] = json_decode($aqar['bathroom_id']);
        $aqar['laundry_id'] = json_decode($aqar['laundry_id']);
        $aqar['another_room_id'] = json_decode($aqar['another_room_id']);
        $aqar['conditioning_type_id'] = json_decode($aqar['conditioning_type_id']);
        $aqar['changed_price']=json_decode($aqar['changed_price']);
        $aqar['car_position_id']=json_decode($aqar['car_position_id']);
        $aqar['swimmingpool']=json_decode($aqar['swimmingpool']);
        $users = User::all();
        $categories = Category::where('type',1)->where('active',1)->get();
        $AnotherRoom = AnotherRoom::where('active',1)->get();
        $Area = Area::where('active',1)->get();
        $Floor = Floor::where('active',1)->get();
        $FloorNumber = FloorNumber::where('active',1)->get();
        $Crew = Crew::where('active',1)->get();
        $Service = Service::where('active',1)->get();
        $FreeService = FreeService::where('active',1)->get();
        $Kitchen = Kitchen::where('active',1)->get();
        $Bathroom = Bathroom::where('active',1)->get();
        $Laundry = Laundry::where('active',1)->get();
        $ConditioningType = ConditionType::where('active',1)->get();
        $CarPosition=CarPosition::where('active',1)->get();
        $Pool=Pool::where('active',1)->get();
        $countries = Country::all();
        $cities = City::all();
        return view('dashboard.aqars.show', compact('aqar', 'users', 'categories','AnotherRoom','Area','Bathroom','ConditioningType','Floor','FloorNumber','Service','FreeService','Crew','Kitchen','Laundry','CarPosition','Pool', 'countries', 'cities'));
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->except(['main_image','images','videos']);

        $aqar = Aqar::create($request_data);

        if ($request->hasFile('main_image')) {
//            $thumbnail = $request->file('main_image');
//            $destinationPath = 'images/aqars/';
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
//            $thumbnail->move($destinationPath, $filename);
//            $aqar->main_image = $filename;
//            $aqar->save();
            UploadImage('images/aqars/','main_image', $aqar, $request->file('main_image'));

        }

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $key => $files) {
                $destinationPath = 'images/places/';
                $file_name = $_FILES['images']['name'][$key];
                $files->move($destinationPath, $file_name);
                $data[] = $_FILES['images']['name'][$key];
                $aqar->images = json_encode($data);
                $aqar->save();
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

        if ($aqar) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.aqars.index');

        }
    }

    public function update($aqar, $request)
    {
        // TODO: Implement update() method.

        $request_data = $request->except(['main_image', '_token', '_method', 'images','videos']);
        $aqar->update($request_data);


        if ($request->hasFile('main_image')) {
//            $thumbnail = $request->file('main_image');
//            $destinationPath = 'images/aqars/';
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
//            $thumbnail->move($destinationPath, $filename);
//            $aqar->main_image = $filename;
//            $aqar->save();
            UploadImage('images/aqars/','main_image', $aqar, $request->file('main_image'));
        }

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $key => $files) {
                $destinationPath = 'images/places/';
                $file_name = $_FILES['images']['name'][$key];
                $files->move($destinationPath, $file_name);
                $data[] = $_FILES['images']['name'][$key];
                $aqar->images = json_encode($data);
                $aqar->save();
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
        if ($aqar) {
            Alert::success('Success', __('site.updated_successfully'));

            return redirect()->route('dashboard.aqars.index');
            session()->flash('success', __('site.updated_successfully'));
        } else {
            Alert::success('Success', __('site.update_faild'));

            return redirect()->route('dashboard.aqars.index');

        }
    }


    public function destroy($aqar)
    {
        // TODO: Implement destroy() method.
//        $result=DB::table('categories')->where('id',$category->id)->delete();
        $result = $aqar->delete();
        if ($result) {
                Alert::toast('Success', __('site.deleted_successfully'));
        } else {
                Alert::toast('Error', __('site.delete_faild'));

          //      session()->flash('error', __('site.delete_faild'));
        }

        return back();
    }
}
