<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Aqar;
use App\Models\AqarBooking;
use App\Models\AqarComment;
use App\Models\AqarReview;
use App\Models\AqarSections;
use App\Models\AqarService;
use App\Models\Car;
use App\Models\CarBooking;
use App\Models\Category;

use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Response;
use Validator;

use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AquarController extends Controller
{


    public function allcommentAqar($id)
    {
        $user = Auth::user();

        $aquar = Aqar::find($id);

        return view('frontend.commentaquar', compact('user', 'aquar'));

    }

    public function addRateAqar(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'rate' => 'nullable',
            'description' => 'nullable|string',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }

        $request_data = $request->except('_token');
        $request_data['user_id'] = Auth::id() ?? '';
        $request_data['rate'] = $request['rate'] ?? 0;


        $comments = AqarComment::create([
            'rating' => $request_data['rate'],
            'description' => $request['description'],
            'aqar_id' => $request['aqar_id'],
            'user_id' => $request_data['user_id'] ?? '',
        ]);
        $data = AqarReview::create([

            'rate' => $request_data['rate'],
            'aqar_id' => $request['aqar_id'],
            'review_element_id' => $request['review_element_id'],
            'user_id' => $request_data['user_id'] ?? '',

        ]);

        return response()->json(['status' => true, 'content' => 'success', 'data' => $data]);

    }

    public function addcancelbooking(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'canclereason' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }

        $request_data = $request->except('_token');
        $request_data['user_id'] = Auth::id() ?? '';


        $data = AqarBooking::updateOrCreate(['id' => $request_data['booking']], [

            'id' => $request_data['booking'],
            'cancle_reason' => $request['canclereason'],
            'booking_status_id' => 4,

            'user_id' => $request_data['user_id'] ?? '',
            'cancel_user_id ' => $request_data['user_id'] ?? '',

        ]);

        return response()->json(['status' => true, 'content' => 'success', 'data' => $data]);

    }

    public function favouritAqar(Request $request, $id)
    {

        if (auth()->user()) {


            $user_id = Auth::id();

            $users = User::find($user_id);


            $user = $users->favourite_aqars()->toggle($id);

            $status = ($user['attached'] !== []) ? 'added' : 'deleted';

            return response()->json(['status' => $status, 'content' => 'success']);
        } else {


            return response()->json(['status' => 'auth', 'content' => 'login']);


        }

    }

    public function mybookingAll()
    {
        $user = Auth::user();

        $aqarbooking = $user->setRelation('aqarBooking', $user->aqarBooking()->paginate(20));

        $carBooking = $user->setRelation('carBooking', $user->carBooking()->paginate(20));

//        return $aqarbooking->aqarBooking->first()->bookingStatus->status;

//

        return view('frontend.mybookingAll', compact('aqarbooking', 'carBooking'));


    }

    public function myfavouriteAll()
    {
        $user = Auth::user();

        $favouriteaqar = $user->setRelation('favourite_aqars', $user->favourite_aqars()->paginate(20));


        $favouritecar = $user->setRelation('favourite_car', $user->favourite_car()->paginate(20));


        $favouriteplace = $user->setRelation('favourite_place', $user->favourite_place()->paginate(20));


        return view('frontend.myfavouriteAll', compact('favouriteaqar', 'favouritecar', 'favouriteplace'));


    }


    public function diffInDays($date1, $date2)
    {
        $diff = strtotime($date2) - strtotime($date1);
        return abs($diff / 86400);
    }


    public function countDaysbetweendates(Request $request)
    {


        $price = Aqar::find($request->aqar_id)->fixed_price ?? 0;


        $deliverydate = Carbon::createFromFormat('d/m/Y', $request->delivery_date)
            ->format('d-m-Y');

        $recieptdate = Carbon::createFromFormat('d/m/Y', $request->reciept_date)
            ->format('d-m-Y');


        $days = $this->diffInDays($recieptdate, $deliverydate);

        $total = $price * $days;

        $data['total'] = $total;
        $data['days'] = $days;


        return response()->json(['status' => 200, 'content' => 'success', 'data' => $data]);


    }

    public function bookingaquarsstatus(Request $request)
    {
        $requestdata = $request->all();

        $date = date('Y-m-d');
//        $newDate = Carbon::createFromFormat('m/d/Y', $date);
        $newDate = Carbon::parse($date)->format('Y-m-d');

//        dd($newDate);
        $aqar = Aqar::findorfail($request['aqar_id']);

//        $requestdata['reciept_date'] = date('Y-m-d H:i:s', strtotime($request->reciept_date));
//        $requestdata['delivery_date'] = date('Y-m-d H:i:s', strtotime($request->delivery_date));

        $requestdata['reciept_date'] = Carbon::createFromFormat('d/m/Y', $request->reciept_date)
            ->format('d-m-Y');

        $requestdata['delivery_date'] = Carbon::createFromFormat('d/m/Y', $request->delivery_date)
            ->format('d-m-Y');


        $requestdata['day_count'] = $this->diffInDays($requestdata['delivery_date'], $requestdata['reciept_date']);
        $requestdata['date'] = $newDate;
        $requestdata['user_id'] = Auth::id();
        $total = $aqar->fixed_price * $requestdata['day_count'];
        $aquars = AqarBooking::updateOrCreate(
            ['aqar_id' => $request['aqar_id'], 'user_id' => Auth::id()],
            [
                'aqar_id' => $request['aqar_id'], 'user_id' => Auth::id(),
                'reciept_date' => $requestdata['reciept_date'], 'delivery_date' => $requestdata['delivery_date'],
                'note' => $requestdata['note'],
                'date' => $newDate, 'fixed_price' => $aqar->fixed_price,
                'day_count' => $requestdata['day_count'], 'total_price' => $total,
                'booking_status_id' => 1

            ]);

        $user = Auth::user();
        $bookings = $user->aqarBooking;


//        return response()->json(['status' => true, 'content' => 'success', 'data' => $bookings]);


        return view('frontend.mybookingAqar', compact('aqar', 'bookings'));


    }

    public function detailbookingaquars($id)
    {
        $booking = AqarBooking::find($id);

        return view('frontend.bookingdetailaqar', compact('booking'));

    }

    public function bookingaquars($id)
    {


        $aqar = Aqar::find($id);
        $user = Auth::user();
        $bookings = $user->aqarBooking ?? [];


        return view('frontend.aqarbooking', compact('aqar', 'bookings'));

    }

    public function filteraquars(Request $request)
    {


        if (!empty($request->country_id) && !empty($request->city_id) && !empty($request->category_id)) {

            $aquars = Aqar::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->where('category_id', '=', $request->category_id)->paginate(12);
        } elseif (!empty($request->country_id) && !empty($request->category_id)) {

            $aquars = Aqar::where('country_id', '=', $request->country_id)->where('category_id', '=', $request->category_id)->paginate(12);

        } elseif (!empty($request->country_id) && !empty($request->city_id)) {

            $aquars = Aqar::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->paginate(12);

        } elseif (!empty($request->category_id)) {

            $aquars = Aqar::where('category_id', '=', $request->category_id)->paginate(12);

        } elseif (!empty($request->city_id)) {

            $aquars = Aqar::where('city_id', '=', $request->city_id)->paginate(12);

        } elseif (!empty($request->country_id)) {

            $aquars = Aqar::where('country_id', '=', $request->country_id)->paginate(12);

        } else {
            $aquars = Aqar::paginate(12);
        }

        $roomsnumbers = Aqar::with('aqarSection')->get();


        $allaquars = Aqar::where('category_id', '=', Session::get('category_id'))->with('aqarSection')->get();
        $minprice = Aqar::whereNotNull('fixed_price')->min("fixed_price");
        $maxprice = Aqar::whereNotNull('fixed_price')->max("fixed_price");

        $countries = Country::where('active', '=', 1)->get();
        $category = Category::first();
        $cities = City::where('active', '=', 1)->get();
        $CategoriesAquar = Category::where('parent_id', '=', 1)->where('type', '=', 1)->get();
//        $carsfilters = Car::get();
        return view('frontend.aquars', compact('allaquars', 'minprice', 'maxprice', 'roomsnumbers', 'countries', 'cities', 'aquars', 'CategoriesAquar', 'category'));


    }

    public function allaquars(Request $request, $id)
    {

        session_start();
        Session::put('category_id', $id);

        $aquars = Aqar::where('category_id', '=', $id)->with('aqarSection')->paginate(12);
        $allaquars = Aqar::where('category_id', '=', $id)->with('aqarSection')->get();
        $roomsnumbers = Aqar::with('aqarSection')->get();
        $minprice = Aqar::whereNotNull('fixed_price')->min("fixed_price");
        $maxprice = Aqar::whereNotNull('fixed_price')->max("fixed_price");


        $roomnumbers = DB::select("SELECT   DISTINCT sum(aqar_details.name_ar) as total
        FROM `aqars`
        INNER JOIN aqar_sections on aqars.id=aqar_sections.aqar_id
        INNER JOIN aqar_details on aqar_details.id=aqar_sections.sub_section_id
        WHERE aqars.category_id=$id and aqar_sections.section_id=6 or aqar_sections.section_id=18 group by aqars.id  ORDER BY sum(aqar_details.name_ar);");


        $countries = Country::where('active', '=', 1)->get();
        $category = Category::find($id);
        $cities = City::where('active', '=', 1)->get();
        $CategoriesAquar = Category::where('parent_id', '=', 1)->where('type', '=', 1)->get();
//        $carsfilters = Car::get();
        return view('frontend.aquars', compact('roomnumbers', 'minprice', 'maxprice', 'allaquars', 'countries', 'cities', 'aquars', 'CategoriesAquar', 'category'));

    }


    public function checkallaquar(Request $request)
    {


        $request['room_number'] = $request->room_number ?? [];
        $request['floor_number'] = $request->floor_number ?? [];
        $request['sections'] = $request->sections ?? [];
        $request['price'] = $request->price ?? [];
        $request['rate'] = $request->rate ?? [];

//        if (isset($request)) {
//            $cars = Car::orWhereIn('category_id', $request->category_id)
//                ->orWhereIn('year', $request->array_year)
//                ->orWhereIn('color', $request->array_color)
//                ->orWhereIn('fixed_price', $request->fixed_price)
//                ->paginate(7);
//        }

//return $request;
        if (!empty($request['price'])) {

            $aquars = Aqar::Where('fixed_price', $request->price)
                ->paginate(12);
        } elseif (!empty($request['sections'])) {

            $aquar_id = AqarSections::WhereIn('section_id', $request->sections)->pluck('aqar_id');
            $aquars = Aqar::WhereIn('id', $aquar_id)->paginate(12);
        } elseif (!empty($request['rate'])) {


            $aqarid = AqarReview::WhereIn('rate', $request->rate)->pluck('aqar_id');


            $aquars = Aqar::WhereIn('id', $aqarid)->paginate(12);

        }


        return view('frontend.aquarsearch', compact('aquars'));

    }
//
//
    public function detailaquar($id)
    {

        $aquar = Aqar::find($id);
        return view('frontend.detailaquar', compact('aquar'));


    }


}
