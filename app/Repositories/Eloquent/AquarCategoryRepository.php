<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Models\City;
use App\Repositories\Interfaces\AquarCategoryRepositoryInterface;
use Alert;

class AquarCategoryRepository implements AquarCategoryRepositoryInterface
{
    public function getAll($data)
    {
        return $data->render('dashboard.aqars.cat_aquar.index', [
            'title' => trans('site.aquarcategories'),
            'model' => 'categories',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.
        $cities = City::all();

        return view('dashboard.aqars.cat_aquar.create',compact('cities'));
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.

        $category = Category::find($Id);
        $citiesrelated = json_decode($category->city_id) ?? [];

        $cities = City::all();


        return view('dashboard.aqars.cat_aquar.edit', compact('category','citiesrelated','cities'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.

        $category = Category::find($Id);

        $cities = City::all();

        $citiesrelated = json_decode($category->city_id) ?? [];


        return view('dashboard.aqars.cat_aquar.show', compact('category','cities','citiesrelated'));
    }


    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->except(['image' , 'city_id']);

        // To Make  Active
        $request_data['active'] = 1;
        $request_data['type'] = 1;
        $category = Category::create($request_data + ['city_id' => json_encode($request['city_id'])]);

        if ($request->hasFile('image')) {
//            $thumbnail = $request->file('image');
//            $destinationPath = 'images/categories/';
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
//            $thumbnail->move($destinationPath, $filename);
//            $category->image = $filename;
//            $category->save();
            UploadImage('images/categories/','image', $category, $request->file('image'));

        }

        if ($category) {
            Alert::success('Success', __('site.added_successfully'));
            return redirect()->route('dashboard.aquarcategories.index');

        }
    }

    public function update($category, $request)
    {
        // TODO: Implement update() method.

        $request_data = $request->except(['image','city_id']);
        $category->update($request_data + ['city_id' => json_encode($request['city_id'])]);

        $request_data['type'] = 1;

        if ($request->hasFile('image')) {
//            $thumbnail = $request->file('image');
//            $destinationPath = 'images/categories/';
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
//            $thumbnail->move($destinationPath, $filename);
//            $category->image = $filename;
//            $category->save();
            UploadImage('images/categories/','image', $category, $request->file('image'));
        }

        if ($category) {
            Alert::success('Success', __('site.updated_successfully'));
            return redirect()->route('dashboard.aquarcategories.index');
        } else {
              Alert::error('Error', __('site.update_faild'));
              return redirect()->route('dashboard.aquarcategories.index');

        }
    }


    public function destroy($category)
    {

        $result = $category->delete();

        return back();
    }
}
