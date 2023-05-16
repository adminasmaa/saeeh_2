<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Repositories\Interfaces\CityRepositoryInterface as ICityRepositoryAlias;
use Alert;

use http\Client\Request;
use Intervention\Image\Facades\Image;

class CityRepository implements ICityRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.cities.index', [
            'title' => trans('site.cities'),
            'model' => 'cities',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.

        $countries = Country::get();
        $categories = Category::where('type', '=', 0)->get();


        return view('dashboard.cities.create', compact('countries', 'categories'));
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.

        $city = City::find($Id);
        $countries = Country::get();

        $categories = Category::where('type', '=', 0)->get();
        $Category_id = $city->categoriesTotal->pluck('id');
        $reletedCategory = json_decode($Category_id) ?? [];
        return view('dashboard.cities.edit', compact('city', 'countries', 'categories', 'reletedCategory'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.


        $city = City::find($Id);
        $countries = Country::get();
        $categories = Category::where('type', '=', 0)->get();

        $Category_id = $city->categoriesTotal->pluck('id');
        $reletedCategory = json_decode($Category_id) ?? [];

        return view('dashboard.cities.show', compact('city', 'countries','categories','reletedCategory'));
    }

    public function destroy($city)
    {
        // TODO: Implement destroy() method.

        $result = $city->delete();
        if ($result) {
            Alert::toast('Deleted', __('site.deleted_successfully'));
        } else {
            Alert::toast('Deleted', __('site.delete_faild'));

        }

        return back();
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->except(['image', 'category_id']);

        // To Make User Active
        $request_data['active'] = 1;

        $city = City::create($request_data);

        $city->categoriesTotal()->attach($request->category_id);
        if ($request->hasFile('image')) {
//            $thumbnail = $request->file('image');
//            $destinationPath = 'images/cities/';
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
//            $thumbnail->move($destinationPath, $filename);
//            $city->image = $filename;
//            $city->save();
            UploadImage('images/cities/', 'image', $city, $request->file('image'));

        }


        if ($city) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.cities.index');

        }
    }

    public function update($city, $request)
    {
        // TODO: Implement update() method.


        $request_data = $request->except(['image', 'category_id']);


        $city->update($request_data);

        $city->categoriesTotal()->sync($request->category_id);

        if ($request->hasFile('image')) {
//            $thumbnail = $request->file('image');
//            $destinationPath = 'images/cities/';
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
//            $thumbnail->move($destinationPath, $filename);
//            $city->image = $filename;
//            $city->save();
            UploadImage('images/cities/', 'image', $city, $request->file('image'));
        }


        if ($city) {
            Alert::success('Success', __('site.updated_successfully'));

            return redirect()->route('dashboard.cities.index');
        } else {

            return redirect()->route('dashboard.cities.index');

        }
    }
}
