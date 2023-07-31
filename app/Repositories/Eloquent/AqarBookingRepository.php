<?php

namespace App\Repositories\Eloquent;


use App\Models\AqarBooking;
use App\Repositories\Interfaces\AqarBookingRepositoryInterface as IAqarBookingRepositoryAlias;
use Illuminate\Support\Facades\Auth;
use App\Models\BookingStatus;   //belongsTo

use Alert;

class AqarBookingRepository implements IAqarBookingRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.aquarbooking.index', [
            'title' => trans('site.bookings'),
            'model' => 'booking',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // // TODO: Implement create() method.


    }


    public function show($Id)
    {
        // TODO: Implement show() method.
        $data = AqarBooking::find($Id);
        
        $bookingStatus = BookingStatus::all();

        return view('dashboard.aquarbooking.show',compact('data', 'bookingStatus'));
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


        return redirect()->route('dashboard.aquarbooking.index');
    }


    public function edit($data)
    {
        // TODO: Implement edit() method.
    }

    public function store($request)
    {
        // TODO: Implement store() method.
    }

    public function update($data, $request)
    {
        // TODO: Implement update() method.
    }
}
