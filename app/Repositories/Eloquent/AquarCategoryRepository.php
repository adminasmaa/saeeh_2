<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Repositories\Interfaces\AquarCategoryRepositoryInterface;

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

        return view('dashboard.aqars.cat_aquar.create');
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.

        $category = Category::find($Id);

        return view('dashboard.aqars.cat_aquar.edit', compact('category'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.

        $category = Category::find($Id);


        return view('dashboard.aqars.cat_aquar.show', compact('category'));
    }


    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->except(['image']);

        // To Make  Active
        $request_data['active'] = 1;
        $request_data['type'] = 1;
        $category = Category::create($request_data);

        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
            $destinationPath = 'images/categories/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $category->image = $filename;
            $category->save();
        }

        if ($category) {
            return redirect()->route('dashboard.aquarcategories.index');

        }
    }

    public function update($category, $request)
    {
        // TODO: Implement update() method.


        $request_data = $request->except(['image']);
        $category->update($request_data);
        $request_data['type'] = 1;

        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
            $destinationPath = 'images/categories/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $category->image = $filename;
            $category->save();
        }

        if ($category) {

            return redirect()->route('dashboard.aquarcategories.index');
        } else {
              return redirect()->route('dashboard.aquarcategories.index');

        }
    }


    public function destroy($category)
    {

        $result = $category->delete();

        return back();
    }
}