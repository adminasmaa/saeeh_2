<?php

namespace App\Repositories\Eloquent;

use App\Models\CarPosition;
use App\Repositories\Interfaces\CarPositionRepositoryInterface as ICarPositionRepositoryAlias;
use Alert;


class CarPositionRepository implements ICarPositionRepositoryAlias
{
    public function getAll($data)
    {

//        return $data->query();

        return $data->render('dashboard.car_positions.index', [
            'title' => trans('site.car_positions'),
            'model' => 'car_positions',
            'count' => $data->count(),

        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.
        return view('dashboard.car_positions.create');
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.

        $carPosition = CarPosition::find($Id);

        return view('dashboard.car_positions.edit', compact('carPosition'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.

        $carPosition = CarPosition::find($Id);
        return view('dashboard.car_positions.show', compact('carPosition'));
    }


    public function store($request)
    {

        $request_data = $request->all();
        $carPosition = CarPosition::create($request_data);

        if ($carPosition) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.car_positions.index');

        }
    }

    public function update($carPosition, $request)
    {
        // TODO: Implement update() method.

        $request_data = $request->all();


        $carPosition->update($request_data);

        if ($carPosition) {
            Alert::success('Success', __('site.updated_successfully'));

            return redirect()->route('dashboard.car_positions.index');
//            session()->flash('success', __('site.updated_successfully'));
        } else {

            return redirect()->route('dashboard.car_positions.index');

        }
    }


    public function destroy($carPosition)
    {
        // TODO: Implement destroy() method.
        $result = $carPosition->delete();
        if ($result) {
                Alert::toast('Success', __('site.deleted_successfully'));
        } else {
                Alert::toast('Success', __('site.delete_faild'));

        }

        return back();
    }
}
