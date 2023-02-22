<?php

namespace App\Repositories\Eloquent;


use App\Models\Ads;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\User;
use App\Repositories\Interfaces\CarRepositoryInterface as CarRepositoryInterfaceAlias;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Alert;

class CarRepository implements CarRepositoryInterfaceAlias
{
    public function getAll($data)
    {

//        return $data->query();

        return $data->render('dashboard.cars.index', [
            'title' => trans('site.cars'),
            'model' => 'cars',
            'count' => $data->count(),

        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.

        $users = User::all();
        $brands = CarBrand::all();
        $ads = Ads::all();
        return view('dashboard.cars.create', compact('users', 'brands', 'ads'));
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.

        $car = Car::find($Id);

        $users = User::all();
        $brands = CarBrand::all();
        $ads = Ads::all();


        return view('dashboard.cars.edit', compact('car', 'users', 'brands', 'ads'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.

        $car = Car::find($Id);

        $users = User::all();
        $brands = CarBrand::all();
        $ads = Ads::all();


        return view('dashboard.cars.show', compact('car', 'users', 'brands', 'ads'));
    }


    public function store($request)
    {


        // TODO: Implement store() method.

        $request_data = $request->except(['main_image_ads', 'images','videos']);

        // To Make  Active

        $car = Car::create($request_data);

        if ($request->hasFile('main_image_ads')) {
            $thumbnail = $request->file('main_image_ads');
            $destinationPath = 'images/cars/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $car->main_image_ads = $filename;
            $car->save();
        }

        if ($request->hasFile('videos')) {
            $thumbnail = $request->file('videos');
            $destinationPath = 'images/cars/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $car->videos = $filename;
            $car->save();
        }


        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $key => $files) {
                $destinationPath = 'images/cars/';
                $file_name = $_FILES['images']['name'][$key];
                $files->move($destinationPath, $file_name);
                $data[] = $_FILES['images']['name'][$key];
                $car->images = json_encode($data);
                $car->save();
            }
        }





        if ($car) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.cars.index');

        }
    }

    public function update($car, $request)
    {
        // TODO: Implement update() method.

        $request_data = $request->except(['main_image_ads', '_token', '_method', 'images','videos']);
        $car->update($request_data);


        if ($request->hasFile('main_image_ads')) {
            $thumbnail = $request->file('main_image_ads');
            $destinationPath = 'images/cars/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $car->main_image_ads = $filename;
            $car->save();
        }

        if ($request->hasFile('videos')) {
            $thumbnail = $request->file('videos');
            $destinationPath = 'images/cars/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $car->videos = $filename;
            $car->save();
        }

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $key => $files) {
                $destinationPath = 'images/cars/';
                $file_name = $_FILES['images']['name'][$key];
                $files->move($destinationPath, $file_name);
                $data[] = $_FILES['images']['name'][$key];
                $car->images = json_encode($data);
                $car->save();
            }
        }



        if ($car) {
            Alert::success('Success', __('site.updated_successfully'));

            return redirect()->route('dashboard.cars.index');
//            session()->flash('success', __('site.updated_successfully'));
        } else {
            Alert::error('Error', __('site.update_faild'));

            return redirect()->route('dashboard.cars.index');

        }
    }


    public function destroy($car)
    {
        // TODO: Implement destroy() method.
        $result = $car->delete();
        if ($result) {
                Alert::toast('Success', __('site.deleted_successfully'));
        } else {
                Alert::toast('Success', __('site.delete_faild'));

        }

        return back();
    }
}
