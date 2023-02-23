<?php

namespace App\Repositories\Eloquent;


use App\Models\AnotherRoom;
use App\Repositories\Interfaces\AnotherRoomRepositoryInterface as IAnotherRoomRepositoryAlias;
use Illuminate\Support\Facades\Auth;

use Alert;

class AnotherRoomRepository implements IAnotherRoomRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.another_rooms.index', [
            'title' => trans('site.another_rooms'),
            'model' => 'another_rooms',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.


        return view('dashboard.another_rooms.create');
    }

    public function edit($data)
    {
        // TODO: Implement edit() method.
        $data = AnotherRoom::find($data);

        return view('dashboard.another_rooms.edit',compact('data'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.
        $data = AnotherRoom::find($Id);

        return view('dashboard.another_rooms.show',compact('data'));
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


        return redirect()->route('dashboard.another_rooms.index');
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $data = AnotherRoom::create($request_data);


        if ($data) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.another_rooms.index');

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

        return redirect()->route('dashboard.another_rooms.index');
    }
}
