<?php

namespace App\Repositories\Eloquent;


use App\Models\Kitchen;
use App\Repositories\Interfaces\KitchenRepositoryInterface as IKitchenRepositoryAlias;
use Illuminate\Support\Facades\Auth;

use Alert;

class KitchenRepository implements IKitchenRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.kitchens.index', [
            'title' => trans('site.kitchens'),
            'model' => 'kitchens',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.


        return view('dashboard.kitchens.create');
    }

    public function edit($data)
    {
        // TODO: Implement edit() method.
        $data = Kitchen::find($data);

        return view('dashboard.kitchens.edit',compact('data'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.
        $data = Kitchen::find($Id);

        return view('dashboard.kitchens.show',compact('data'));
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


        return redirect()->route('dashboard.kitchens.index');
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $data = Kitchen::create($request_data);


        if ($data) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.kitchens.index');

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

        return redirect()->route('dashboard.kitchens.index');
    }
}
