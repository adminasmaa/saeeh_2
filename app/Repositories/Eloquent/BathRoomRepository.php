<?php

namespace App\Repositories\Eloquent;


use App\Models\Bathroom;
use App\Repositories\Interfaces\BathRoomRepositoryInterface as IBathRoomRepositoryAlias;
use Illuminate\Support\Facades\Auth;

use Alert;

class BathRoomRepository implements IBathRoomRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.bathrooms.index', [
            'title' => trans('site.bathrooms'),
            'model' => 'bathrooms',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.


        return view('dashboard.bathrooms.create');
    }

    public function edit($data)
    {
        // TODO: Implement edit() method.
        $data = Bathroom::find($data);

        return view('dashboard.bathrooms.edit',compact('data'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.
        $data = Bathroom::find($Id);

        return view('dashboard.bathrooms.show',compact('data'));
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


        return redirect()->route('dashboard.bathrooms.index');
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $data = Bathroom::create($request_data);


        if ($data) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.bathrooms.index');

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

        return redirect()->route('dashboard.bathrooms.index');
    }
}
