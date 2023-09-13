<?php

namespace App\Repositories\Eloquent;


use App\Models\Ads;
use App\Models\Car;
use App\Models\CarBooking;
use App\Models\CarComment;
use App\Models\City;
use App\Models\User;
use App\Models\BookingStatus;   //belongsTo
use App\Repositories\Interfaces\BookingRepositoryInterface as BookingRepositoryInterfaceAlias;
use Illuminate\Support\Facades\DB;
use Alert;


class BookingRepository implements BookingRepositoryInterfaceAlias
{
    public function getAll($data)
    {


        return $data->render('dashboard.bookings.index', [
            'title' => trans('site.bookings'),
            'model' => 'bookings',
            'count' => $data->count(),

        ]);
    }


    public function show($Id)
    {
        // TODO: Implement show() method.
        $booking=CarBooking::find($Id);
        $cars = Car::all();

        $users = User::all();
        $ads=Ads::all();
        $cities=City::all();
        $bookingStatus = BookingStatus::all();

        return view('dashboard.bookings.show', compact('booking', 'users', 'cars','ads','cities', 'bookingStatus'));
    }
    public function destroy($car)
    {
        // TODO: Implement destroy() method.
        $result = $car->delete();
        if ($result) {
                Alert::toast('Deleted', __('site.deleted_successfully'));
        } else {
                Alert::toast('Deleted', __('site.delete_faild'));

//                session()->flash('error', __('site.delete_faild'));
        }

        return back();
    }


    public function acceptbooking($book_id)
    {

        $request_data = CarBooking::find($book_id);

        $request_data->booking_status_id =2;

        
        $request_data->save();

        if ($request_data) {
            Alert::success('Success', __('site.book_accepted_successfully'));
        } else {
            Alert::error('Error', __('site.update_faild'));

        }
        return back();


    }

    public function rejectbooking($book_id)
    {

        $request_data = CarBooking::find($book_id);

        $request_data->booking_status_id =4;

        $request_data->save();

        if ($request_data) {
            Alert::success('Success', __('site.book_rejected_successfully'));
        } else {
            Alert::error('Error', __('site.update_faild'));

        }
        return back();


    }
}
