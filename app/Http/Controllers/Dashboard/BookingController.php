<?php

namespace App\Http\Controllers\Dashboard;


use App\DataTables\BookingsDataTable;
use App\Http\Controllers\Controller;


use App\Models\CarBooking;
use App\Repositories\Interfaces\BookingRepositoryInterface;
use App\Services\TwoFactorService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookingController extends Controller
{


    private BookingRepositoryInterface $bookingRepository;

    public function __construct(BookingRepositoryInterface $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }

    public function index(BookingsDataTable $bookingsDataTable)
    {

        return $this->bookingRepository->getAll($bookingsDataTable);

    }


    public function show($id)
    {
        return $this->bookingRepository->show($id);


    }









    public function destroy($id)
    {
        $booking =CarBooking::find($id);

        return $this->bookingRepository->destroy($booking);


    }//end of destroy


    public function acceptbooking($car_id)
    {

      return $this->bookingRepository->acceptbooking($car_id);

    }


    public function rejectbooking($car_id)
    {

      return $this->bookingRepository->rejectbooking($car_id);

    }

    public function confirmRejectbooking(Request $request,$book_id)
    {

      return $this->bookingRepository->confirmRejectbooking($book_id ,$request);

    }

}
