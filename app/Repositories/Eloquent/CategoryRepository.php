<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Models\City;
use App\Repositories\Interfaces\CategoryRepositoryInterface as CategoryRepositoryInterfaceAlias;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Alert;

class CategoryRepository implements CategoryRepositoryInterfaceAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.categories.index', [
            'title' => trans('site.categories'),
            'model' => 'categories',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.

        $cities = City::all();

        return view('dashboard.categories.create', compact('cities'));
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.

        $category = Category::find($Id);

        $subcategories = Category::where('parent_id', $Id)->get();

        $cities = City::all();

        return view('dashboard.categories.edit', compact('category', 'subcategories', 'cities'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.

        $category = Category::find($Id);

        $subcategories = Category::where('parent_id', $Id)->get();

        $cities = City::all();


        return view('dashboard.categories.show', compact('category', 'subcategories', 'cities'));
    }


    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->except(['image', 'name_category', 'image_category']);

        // To Make  Active
        $request_data['active'] = 1;

        $category = Category::create($request_data);

        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
            $destinationPath = 'images/categories/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $category->image = $filename;
            $category->save();
        }

        if (isset($request['name_category'])) {

            foreach ($request['name_category'] as $key => $value) {
                $cat = Category::create([
                    'name_ar' => $value,
                    'parent_id' => $category->id
                ]);


//                if (isset($request['image_category'][$key])) {

                    $image = $request['image_category'][$key];


                    $destinationPath = 'images/categories/';
                    $extension = $image->getClientOriginalExtension(); // getting image extension
                    $name = time() . '' . rand(11111, 99999) . '.' . $extension; // renameing image
                    $image->move($destinationPath, $name); // uploading file to given
                    $cat->image = $name;

                    $cat->save();

                }
//            }

        }
        if ($category) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.categories.index');

        }
    }

    public function update($category, $request)
    {
        // TODO: Implement update() method.


        $request_data = $request->except(['image', 'name_category', 'image_category']);
        $category->update($request_data);


        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
            $destinationPath = 'images/categories/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $category->image = $filename;
            $category->save();
        }

        if (isset($request['name_category'])) {

            foreach ($request['name_category'] as $key => $value) {
                $cat = Category::create([
                    'name_ar' => $value,
                    'parent_id' => $category->id
                ]);


//            if (isset($request['image_category'][$key])) {

                $image = $request['image_category'][$key];


                $destinationPath = 'images/categories/';
                $extension = $image->getClientOriginalExtension(); // getting image extension
                $name = time() . '' . rand(11111, 99999) . '.' . $extension; // renameing image
                $image->move($destinationPath, $name); // uploading file to given
                $cat->image = $name;

                $cat->save();

            }
        }
        if ($category) {
            Alert::success('Success', __('site.updated_successfully'));

            //   return redirect()->route('dashboard.users.index');
            return redirect()->route('dashboard.categories.index');
//            session()->flash('success', __('site.updated_successfully'));
        } else {
            Alert::error('Error', __('site.update_faild'));

            return redirect()->route('dashboard.categories.index');

        }
    }


    public function destroy($category)
    {
        // TODO: Implement destroy() method.
        $result = $category->delete();
        if ($result) {
                Alert::toast('Deleted', __('site.deleted_successfully'));
        } else {
                Alert::toast('Deleted', __('site.delete_faild'));

        }

        return back();
    }
}
