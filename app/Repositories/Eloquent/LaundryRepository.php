<?php

namespace App\Repositories\Eloquent;


use App\Models\Laundry;
use App\Repositories\Interfaces\LaundryRepositoryInterface as ILaundryRepositoryAlias;
use Illuminate\Support\Facades\Auth;

use Alert;

class LaundryRepository implements ILaundryRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.laundries.index', [
            'title' => trans('site.laundries'),
            'model' => 'laundries',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.


        return view('dashboard.laundries.create');
    }

    public function edit($data)
    {
        // TODO: Implement edit() method.
        $data = Laundry::find($data);

        return view('dashboard.laundries.edit',compact('data'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.
        $data = Laundry::find($Id);

        return view('dashboard.laundries.show',compact('data'));
    }

    public function destroy($data)
    {
        // TODO: Implement destroy() method.


        $result = $data->delete();
        if ($result) {
            Alert::toast('Deleted', __('site.deleted_successfully'));
        } else {
            Alert::toast('Deleted', __('site.delete_faild'));
        }


        return redirect()->route('dashboard.laundries.index');
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $data = Laundry::create($request_data);


        if ($data) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.laundries.index');

        }
    }

    public function update($data, $request)
    {
        // TODO: Implement update() method.


        $request_data = $request->all();

        $data->update($request_data);


        if ($data) {
            Alert::success('Success', __('site.updated_successfully'));
        } else {
            Alert::error('Error', __('site.update_faild'));

        }

        return redirect()->route('dashboard.laundries.index');
    }
}
