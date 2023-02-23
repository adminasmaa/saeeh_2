<?php

namespace App\Repositories\Eloquent;


use App\Models\Floor;
use App\Repositories\Interfaces\FloorRepositoryInterface as IFloorRepositoryAlias;
use Illuminate\Support\Facades\Auth;

use Alert;

class FloorRepository implements IFloorRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.floors.index', [
            'title' => trans('site.floors'),
            'model' => 'floors',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.


        return view('dashboard.floors.create');
    }

    public function edit($data)
    {
        // TODO: Implement edit() method.
        $data = Floor::find($data);

        return view('dashboard.floors.edit',compact('data'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.
        $data = Floor::find($Id);

        return view('dashboard.floors.show',compact('data'));
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


        return redirect()->route('dashboard.roles.index');
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $data = Floor::create($request_data);


        if ($data) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.floors.index');

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

        return redirect()->route('dashboard.floors.index');
    }
}
