<?php

namespace App\Repositories\Eloquent;



use App\Models\FloorNumber;
use App\Repositories\Interfaces\FloorNumberRepositoryInterface as IFloorNumberRepositoryAlias;
use Illuminate\Support\Facades\Auth;

use Alert;

class FloorNumberRepository implements IFloorNumberRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.floor_numbers.index', [
            'title' => trans('site.floor_numbers'),
            'model' => 'floor_numbers',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.


        return view('dashboard.floor_numbers.create');
    }

    public function edit($data)
    {
        // TODO: Implement edit() method.
        $data = FloorNumber::find($data);

        return view('dashboard.floor_numbers.edit',compact('data'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.
        $data = FloorNumber::find($Id);

        return view('dashboard.floor_numbers.show',compact('data'));
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


        return redirect()->route('dashboard.floor_numbers.index');
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $data = FloorNumber::create($request_data);


        if ($data) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.floor_numbers.index');

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

        return redirect()->route('dashboard.floor_numbers.index');
    }
}
