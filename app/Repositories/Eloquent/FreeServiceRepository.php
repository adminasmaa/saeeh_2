<?php

namespace App\Repositories\Eloquent;


use App\Models\FreeService;
use App\Repositories\Interfaces\FreeServiceRepositoryInterface as IFreeServiceRepositoryAlias;
use Illuminate\Support\Facades\Auth;

use Alert;

class FreeServiceRepository implements IFreeServiceRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.free_services.index', [
            'title' => trans('site.free_services'),
            'model' => 'free_services',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.


        return view('dashboard.free_services.create');
    }

    public function edit($data)
    {
        // TODO: Implement edit() method.
        $data = FreeService::find($data);

        return view('dashboard.free_services.edit',compact('data'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.
        $data = FreeService::find($Id);

        return view('dashboard.free_services.show',compact('data'));
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


        return redirect()->route('dashboard.free_services.index');
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $data = FreeService::create($request_data);


        if ($data) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.free_services.index');

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

        return redirect()->route('dashboard.free_services.index');
    }
}
