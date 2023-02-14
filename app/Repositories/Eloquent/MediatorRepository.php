<?php

namespace App\Repositories\Eloquent;

use App\Models\Mediator;
use App\Repositories\Interfaces\MediatorRepositoryInterface as IMediatorRepositoryAlias;


class MediatorRepository implements IMediatorRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.mediators.index', [
            'title' => trans('site.mediators'),
            'model' => 'mediators',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.


        return view('dashboard.mediators.create');
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.

        $mediator = Mediator::find($Id);

        return view('dashboard.mediators.edit', compact('mediator'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.


        $mediator = Mediator::find($Id);


        return view('dashboard.mediators.show', compact('mediator'));
    }

    public function destroy($mediator)
    {
        // TODO: Implement destroy() method.

        $result = $mediator->delete();
        if ($result) {
//                Alert::toast('Success', __('site.deleted_successfully'));
        } else {
//                Alert::toast('Success', __('site.delete_faild'));

//                session()->flash('error', __('site.delete_faild'));
        }

        return back();
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();

        // To Make User Active

        $mediator = Mediator::create($request_data);





        if ($mediator) {
//            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.mediators.index');

        }
    }

    public function update($mediator, $request)
    {
        // TODO: Implement update() method.


        $request_data = $request->all();


        $mediator->update($request_data);





        if ($mediator) {

            return redirect()->route('dashboard.mediators.index');
//            session()->flash('success', __('site.updated_successfully'));
        } else {
//            Alert::success('Success', __('site.update_faild'));

            return redirect()->route('dashboard.mediators.index');

        }
    }
}
