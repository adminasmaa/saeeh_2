<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Aqar;
use App\Models\AqarBooking;
use App\Models\AqarReview;
use App\Models\AqarSections;
use App\Models\AqarService;
use App\Models\Car;
use App\Models\CarBooking;
use App\Models\Category;

use App\Models\City;
use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Response;


use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AquarController extends Controller
{
    public function diffInDays($date1, $date2)
    {
        $diff = strtotime($date2) - strtotime($date1);
        return abs(round($diff / 86400));
    }

    public function addbookingaquars(Request $request)
    {
        $requestdata = $request->all();

        $date = date('Y-m-d');
//        $newDate = Carbon::createFromFormat('m/d/Y', $date);
        $newDate = Carbon::parse($date)->format('Y-m-d');

//        dd($newDate);
        $aqar = Aqar::findorfail($request['aqar_id']);

        $requestdata['reciept_date'] = date('Y-m-d H:i:s', strtotime($request->reciept_date));
        $requestdata['delivery_date'] = date('Y-m-d H:i:s', strtotime($request->delivery_date));
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
                'date' => $newDate,   'fixed_price' => $aqar->fixed_price,
                'day_count' => $requestdata['day_count'], 'total' => $total

            ]);

        $user = Auth::user();
        $bookings = $user->aqarBooking;

        return view('frontend.mybookingAqar', compact('aqar', 'bookings'));


    }


    public function bookingaquars($id)
    {


        $aqar = Aqar::find($id);
        $user = Auth::user();
        $bookings = $user->aqarBooking;



        return view('frontend.aqarbooking', compact('aqar','bookings'));

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

//        foreach ($roomsnumbers as $rooms) {
//
//            foreach ($rooms->aqarSection as $section) {
//
//                return $section->subsection->sum('name_ar');
////                $section->subsection->sum('name_ar')
//
//            }
//        }

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


//        $roomss = [];
//        foreach ($roomsnumbers as $rooms) {
//
//            foreach ($rooms->aqarSection as $section) {
//                $integerIDs = array_map('intval', $section->subsection->toarray());
//
//
//                array_push($integerIDs,$roomss);
////                array_push($rooms,$integerIDs);
//
////                $section->subsection->sum('name_ar')
//
//            }
//        }

        $countries = Country::where('active', '=', 1)->get();
        $category = Category::find($id);
        $cities = City::where('active', '=', 1)->get();
        $CategoriesAquar = Category::where('parent_id', '=', 1)->where('type', '=', 1)->get();
//        $carsfilters = Car::get();
        return view('frontend.aquars', compact('roomsnumbers', 'minprice', 'maxprice', 'allaquars', 'countries', 'cities', 'aquars', 'CategoriesAquar', 'category'));

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
