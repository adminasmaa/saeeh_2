<?php

namespace App\Repositories\Eloquent;


use App\Models\Place;
use App\Models\User;
use App\Models\Category;
use App\Models\PlaceComment;
use App\Models\Notification;
use App\Models\City;
use App\Models\Country;
use App\Repositories\Interfaces\PlaceRepositoryInterface as PlaceRepositoryInterfaceAlias;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Alert;
use App\Models\PlaceTable;

class PlaceRepository implements PlaceRepositoryInterfaceAlias
{
    public function getAll($data)
    {

//        return $data->query();
       
        return $data->render('dashboard.places.index', [
            'title' => trans('site.places'),
            'model' => 'places',
            'count' => $data->count(),

        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.

        $users = User::whereNotNull('account_type')->where('active',1)->get();
        // $categories = Category::all();
        $categories = Category::where('parent_id','=',null)->where('type','=',0)->get();
        $place_comments = PlaceComment::all();
        $notifications = Notification::all();
        $countries = Country::all();
        $cities = City::all();
        return view('dashboard.places.create', compact('users', 'categories', 'place_comments', 'notifications', 'countries', 'cities'));
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.

        $place = Place::find($Id);
        $users = User::whereNotNull('account_type')->where('active',1)->get();
        // $categories = Category::all();
        $place_comments = PlaceComment::all();
        $notifications = Notification::all();
        $categories = Category::where('parent_id','=',null)->where('type','=',0)->get();
        $subcategories = Category::get();
        $countries = Country::all();
        $cities = City::all();
        return view('dashboard.places.edit', compact('place', 'users', 'categories', 'place_comments', 'notifications','subcategories', 'countries', 'cities'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.
      //  $place_table = PlaceTable::all();
        $place = Place::find($Id);
        $users = User::whereNotNull('account_type')->where('active',1)->get();
        $categories = Category::all();
        $place_comments = PlaceComment::all();
        $notifications = Notification::all();
        $subcategories = Category::get();
        $countries = Country::all();
        $cities = City::all();

        return view('dashboard.places.show', compact('place', 'users', 'categories', 'place_comments', 'notifications','subcategories', 'countries', 'cities'));
    }

    public function store($request)
    {
    // return $request;
        // TODO: Implement store() method.

        $request_data = $request->except(['_method','_token','display_photo','notify_photo','images','videos','sub_name_ar','sub_name_en','sub_type']);
        // To Make  Active
        $place = Place::create($request_data);
        
        $arr = $request->sub_name_ar;
        if ($arr[0]!=null) {
            foreach ($request->sub_name_ar as $key => $value) {
                $data=PlaceTable::Create([
                    'name_ar' => $request['sub_name_ar'][$key],
                    'name_en' => $request['sub_name_en'][$key],
                    'type' => $request['sub_type'][$key],
                    'place_id' => $place->id
                ]);
            }
            
        }
        if ($request->hasFile('display_photo')) {

                UploadImage('images/places/','display_photo', $place, $request->file('display_photo'));

        }
        if ($request->hasFile('notify_photo')) {

                UploadImage('images/places/','notify_photo', $place, $request->file('notify_photo'));
        }
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $key => $files) {
                $destinationPath = 'images/places/';
                $file_name = $_FILES['images']['name'][$key];
                $files->move($destinationPath, $file_name);
                $data = $_FILES['images']['name'][$key];
                $place->images = json_encode($data);
                $place->save();
                
            }
        }
        if ($request->hasFile('videos')) {
            $videos = $request->file('videos');
            foreach ($videos as $key => $files) {
                $destinationPath = 'videos/places/';
                $file_name = $_FILES['videos']['name'][$key];
                $files->move($destinationPath, $file_name);
                $data= $_FILES['videos']['name'][$key];
                $place->videos = json_encode($data);
                $place->save();
            }
        }
        if ($place) {
           Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.places.index');

        }
    }

    public function update($place, $request)
    {
        // TODO: Implement update() method.

        $request_data = $request->except(['display_photo', '_token', '_method', 'notify_photo','images','videos']);
        $place->update($request_data);


        if ($request->hasFile('display_photo')) {
//            $thumbnail = $request->file('display_photo');
//            $destinationPath = 'images/places/';
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
//            $thumbnail->move($destinationPath, $filename);
//            $place->display_photo = $filename;
//            $place->save();
            UploadImage('images/places/','display_photo', $place, $request->file('display_photo'));

        }

        if ($request->hasFile('notify_photo')) {
//            $thumbnail = $request->file('notify_photo');
//            $destinationPath = 'images/places/';
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
//            $thumbnail->move($destinationPath, $filename);
//            $place->notify_photo = $filename;
//            $place->save();
            UploadImage('images/places/','notify_photo', $place, $request->file('notify_photo'));

        }
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $key => $files) {
                $destinationPath = 'images/places/';
                $file_name = $_FILES['images']['name'][$key];
                $files->move($destinationPath, $file_name);
                $data[] = $_FILES['images']['name'][$key];
                $place->images = json_encode($data);
                $place->save();
            }
        }
        if ($request->hasFile('videos')) {
            $videos = $request->file('videos');
            foreach ($videos as $key => $files) {
                $destinationPath = 'videos/places/';
                $file_name = $_FILES['videos']['name'][$key];
                $files->move($destinationPath, $file_name);
                $data[] = $_FILES['videos']['name'][$key];
                $place->videos = json_encode($data);
                $place->save();
            }
        }
        if ($place) {
           Alert::success('Success', __('site.updated_successfully'));

            return redirect()->route('dashboard.places.index');
//            session()->flash('success', __('site.updated_successfully'));
        } else {
           Alert::error('Error', __('site.update_faild'));

            return redirect()->route('dashboard.places.index');

        }
    }


    public function destroy($place)
    {
        // TODO: Implement destroy() method.
//        $result=DB::table('categories')->where('id',$category->id)->delete();
        $result = $place->delete();
        if ($result) {
               Alert::toast('Success', __('site.deleted_successfully'));
        } else {
               Alert::toast('Error', __('site.delete_faild'));

//                session()->flash('error', __('site.delete_faild'));
        }

        return back();
    }
}
