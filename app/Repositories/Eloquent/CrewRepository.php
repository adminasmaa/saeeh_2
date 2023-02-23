<?php

namespace App\Repositories\Eloquent;


use App\Models\Crew;
use App\Repositories\Interfaces\CrewRepositoryInterface as ICrewRepositoryAlias;
use Illuminate\Support\Facades\Auth;

use Alert;

class CrewRepository implements ICrewRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.crews.index', [
            'title' => trans('site.crews'),
            'model' => 'crews',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.


        return view('dashboard.crews.create');
    }

    public function edit($data)
    {
        // TODO: Implement edit() method.
        $data = Crew::find($data);

        return view('dashboard.crews.edit',compact('data'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.
        $data = Crew::find($Id);

        return view('dashboard.crews.show',compact('data'));
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


        return redirect()->route('dashboard.crews.index');
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $data = Crew::create($request_data);


        if ($data) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.crews.index');

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

        return redirect()->route('dashboard.crews.index');
    }
}
