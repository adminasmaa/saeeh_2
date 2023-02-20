<?php

namespace App\Repositories\Eloquent;


use App\Models\Car;
use App\Models\CarComment;
use App\Models\User;
use App\Repositories\Interfaces\CarCommentRepositoryInterface as CarCommentRepositoryInterfaceAlias;
use Illuminate\Support\Facades\DB;


class CarCommentRepository implements CarCommentRepositoryInterfaceAlias
{
    public function getAll($data)
    {


        return $data->render('dashboard.car_comments.index', [
            'title' => trans('site.car_comments'),
            'model' => 'car_comments',
            'count' => $data->count(),

        ]);
    }


    public function show($Id)
    {
        // TODO: Implement show() method.
        $CarComment=CarComment::find($Id);
        $cars = Car::all();

        $users = User::all();


        return view('dashboard.car_comments.show', compact('cars', 'users', 'CarComment'));
    }


    public function destroy($car)
    {
        // TODO: Implement destroy() method.
        $result = $car->delete();
        if ($result) {
//                Alert::toast('Success', __('site.deleted_successfully'));
        } else {
//                Alert::toast('Success', __('site.delete_faild'));

//                session()->flash('error', __('site.delete_faild'));
        }

        return back();
    }
}
