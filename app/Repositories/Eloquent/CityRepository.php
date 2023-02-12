<?php

namespace App\Repositories\Eloquent;

use App\Models\City;
use App\Models\Country;
use App\Repositories\Interfaces\CityRepositoryInterface as ICityRepositoryAlias;

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

        return view('dashboard.cities.create', compact('countries'));
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.

        $city = City::find($Id);
        $countries = Country::get();


        return view('dashboard.cities.edit', compact('city', 'countries'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.


        $city = City::find($Id);
        $countries = Country::get();


        return view('dashboard.cities.show', compact('city', 'countries'));
    }

    public function destroy($city)
    {
        // TODO: Implement destroy() method.

        $result = $city->delete();
        if ($result) {
//                Alert::toast('Success', __('site.deleted_successfully'));
        } else {
//                Alert::toast('Success', __('site.delete_faild'));

//                session()->flash('error', __('site.delete_faild'));
        }

        return back();
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->except(['image']);

        // To Make User Active
        $request_data['active'] = 1;

        $city = City::create($request_data);


        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
            $destinationPath = 'images/cities/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $city->image = $filename;
            $city->save();
        }


        if ($city) {
//            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.cities.index');

        }
    }

    public function update($city, $request)
    {
        // TODO: Implement update() method.


        $request_data = $request->except(['image']);


        $city->update($request_data);


        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
            $destinationPath = 'images/cities/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $city->image = $filename;
            $city->save();
        }


        if ($city) {
//            Alert::success('Success', __('site.updated_successfully'));

            //   return redirect()->route('dashboard.users.index');
            return redirect()->route('dashboard.cities.index');
//            session()->flash('success', __('site.updated_successfully'));
        } else {
//            Alert::success('Success', __('site.update_faild'));

            return redirect()->route('dashboard.cities.index');

        }
    }
}
