<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Car;
use App\Models\CarBooking;
use App\Models\CarComment;
use App\Models\CarReview;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Place;
use App\Models\PlaceComment;
use App\Models\PlaceReview;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Response;
use Validator;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CarController extends Controller
{


    public function allcommentCar($id)
    {

        $user = Auth::user();

        $car = Car::find($id);

        return view('frontend.commentcar', compact('user', 'car'));

    }

    public function addcancelbookingCar(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'canclereason' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }

        $request_data = $request->except('_token');
        $request_data['user_id'] = Auth::id() ?? '';


        $data = CarBooking::updateOrCreate(['id' => $request_data['booking']], [

            'id' => $request_data['booking'],
            'cancle_reason' => $request['canclereason'],
            'booking_status_id' => 4,

            'user_id' => $request_data['user_id'] ?? '',
            'cancel_user_id ' => $request_data['user_id'] ?? '',

        ]);

        return response()->json(['status' => true, 'content' => 'success', 'data' => $data]);


    }


    public function addRateCar(Request $request)
    {


        $validation = Validator::make($request->all(), [
            'rate' => 'required',
            'description' => 'nullable|string',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }

        $request_data = $request->except('_token');
        $request_data['user_id'] = Auth::id() ?? '';
        $request_data['rate'] = $request['rate'] ?? 0;


        $comments = CarComment::create([
            'rating' => $request_data['rate'],
            'description' => $request['description'],
            'car_id' => $request['car_id'],
            'user_id' => $request_data['user_id'] ?? '',
        ]);
        $data = CarReview::create([

            'rate' => $request_data['rate'],
            'car_id' => $request['car_id'],
            'user_id' => $request_data['user_id'] ?? '',

        ]);

        return response()->json(['status' => true, 'content' => 'success', 'data' => $data]);


    }

    public function addRate(Request $request)
    {


        $validation = Validator::make($request->all(), [
            'rate' => 'required',
            'description' => 'nullable|string',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }

        $request_data = $request->except('_token');
        $request_data['user_id'] = Auth::id() ?? '';
        $request_data['rate'] = $request['rate'] ?? 0;


        $comments = PlaceComment::create([
            'rating' => $request_data['rate'],
            'description' => $request['description'],
            'place_id' => $request['place_id'],
            'user_id' => $request_data['user_id'] ?? '',
        ]);
        $data = PlaceReview::create([

            'rate' => $request_data['rate'],
            'place_id' => $request['place_id'],
            'user_id' => $request_data['user_id'] ?? '',

        ]);

        return response()->json(['status' => true, 'content' => 'success', 'data' => $data]);


    }

    public function favouritCar(Request $request, $id)
    {

        if (auth()->user()) {
            $user_id = Auth::id();

            $users = User::find($user_id);


            $user = $users->favourite_car()->toggle($id);

            $status = ($user['attached'] !== []) ? 'added' : 'deleted';

            return response()->json(['status' => $status, 'content' => 'success']);
        } else {

            return response()->json(['status' => 'auth', 'content' => 'login']);

        }

    }

    public function favouritPlace(Request $request, $id)
    {
        if (auth()->user()) {
            $user_id = Auth::id();
            $users = User::find($user_id);
            $user = $users->favourite_place()->toggle($id);
            $status = ($user['attached'] !== []) ? 'added' : 'deleted';
            return response()->json(['status' => $status, 'content' => 'success']);
        } else {

            return response()->json(['status' => 'auth', 'content' => 'login']);


        }
    }

    public function diffInDays($date1, $date2)
    {
        $diff = strtotime($date2) - strtotime($date1);
        return abs(round($diff / 86400));
    }

    public function addbookingcar(Request $request)
    {

        $requestdata = $request->all();

        $date = date('Y-m-d');
//        $newDate = Carbon::createFromFormat('m/d/Y', $date);
        $newDate = Carbon::parse($date)->format('Y-m-d');

//        dd($newDate);

        $requestdata['reciept_date'] = date('Y-m-d H:i:s', strtotime($request->reciept_date));
        $requestdata['delivery_date'] = date('Y-m-d H:i:s', strtotime($request->delivery_date));
        $requestdata['day_count'] = $this->diffInDays($requestdata['delivery_date'], $requestdata['reciept_date']);
        $requestdata['date'] = $newDate;
        $requestdata['user_id'] = Auth::id();
        $total = $requestdata['fixed_price'] * $requestdata['day_count'];
        $cars = CarBooking::updateOrCreate(
            ['car_id' => $request['car_id'], 'user_id' => Auth::id(), 'date' => $newDate],
            [
                'car_id' => $request['car_id'], 'user_id' => Auth::id(),
                'reciept_date' => $requestdata['reciept_date'], 'delivery_date' => $requestdata['delivery_date'],
                'delivery_hour' => $requestdata['delivery_hour'], 'delivery_place' => $requestdata['delivery_place'],
                'fixed_price' => $requestdata['fixed_price'], 'note' => $requestdata['note'],
                'receipt_hour' => $requestdata['receipt_hour'], 'date' => $newDate,
                'day_count' => $requestdata['day_count'], 'total' => $total, 'booking_status_id' => 1

            ]);

        $car = Car::findorfail($request['car_id']);
        $user = Auth::user();
        $bookings = $user->carBooking;

        return view('frontend.mybookingcar', compact('car', 'bookings'));


    }

    public function bookingcar($id)
    {
        $car = Car::findorfail($id);
        $user = Auth::user();
        $bookings = $user->carBooking;
//       return $bookings;
        return view('frontend.carbooking', compact('car', 'bookings'));

    }

    public function detailbooking($id)
    {

        $booking = CarBooking::find($id);

        return view('frontend.bookingdetail', compact('booking'));

    }

    public function allcarscategories($id)
    {


        $category = Category::find($id);


        if (!empty($category->subcategories) && $category->subcategories != null && count($category->subcategories) > 0) {


            $subcategories = Category::where('parent_id', '=', $id)->paginate(8);


            return view('frontend.subcategoriescar', compact('category', 'subcategories'));


        }


    }

    public function allcars(Request $request, $id)
    {

        if (!empty($request->country_id) && !empty($request->city_id) && !empty($request->brand_id) && !empty($request->category_id) && !empty($request->year)) {

            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->where('year', '=', $request->year)->where('category_id', '=', $request->brand_id)->paginate(12);
        } elseif (!empty($request->country_id) && !empty($request->city_id) && !empty($request->brand_id)) {
            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->where('category_id', '=', $request->brand_id)->paginate(12);


        } elseif (!empty($request->country_id) && !empty($request->city_id) && !empty($request->year)) {

            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->where('year', '=', $request->year)->paginate(12);

        } elseif (!empty($request->country_id) && !empty($request->year)) {

            $cars = Car::where('country_id', '=', $request->country_id)->where('year', '=', $request->year)->paginate(12);

        } elseif (!empty($request->country_id) && !empty($request->city_id)) {

            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->paginate(12);

        } elseif (!empty($request->country_id)) {

            $cars = Car::where('country_id', '=', $request->country_id)->paginate(12);

        } else {
            $cars = Car::where('sub_category_id', '=', $id)->paginate(12);
        }

        $countries = Country::where('active', '=', 1)->get();
        $category = Category::find($id);
        $cities = City::where('active', '=', 1)->get();
        $CategoriesCar = Category::where('parent_id', '=', 2)->where('type', '=', 2)->get();
        $carsfilters = Car::get();
        return view('frontend.cars', compact('cars', 'carsfilters', 'countries', 'cities', 'CategoriesCar', 'category'));

    }

    public function allcarsFillter(Request $request)
    {
        if (!empty($request->country_id) && !empty($request->city_id) && !empty($request->brand_id) && !empty($request->category_id) && !empty($request->year)) {

            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->where('year', '=', $request->year)->where('category_id', '=', $request->brand_id)->paginate(12);
        } elseif (!empty($request->country_id) && !empty($request->city_id) && !empty($request->brand_id)) {
            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->where('category_id', '=', $request->brand_id)->paginate(12);


        } elseif (!empty($request->country_id) && !empty($request->city_id) && !empty($request->year)) {

            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->where('year', '=', $request->year)->paginate(12);

        } elseif (!empty($request->country_id) && !empty($request->year)) {

            $cars = Car::where('country_id', '=', $request->country_id)->where('year', '=', $request->year)->paginate(12);

        } elseif (!empty($request->country_id) && !empty($request->city_id)) {

            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->paginate(12);

        } elseif (!empty($request->country_id)) {

            $cars = Car::where('country_id', '=', $request->country_id)->paginate(12);

        } else {
            $cars = Car::paginate(12);
        }

        $countries = Country::where('active', '=', 1)->get();
        $cities = City::where('active', '=', 1)->get();
        $CategoriesCar = Category::where('parent_id', '=', 2)->where('type', '=', 2)->get();
        $carsfilters = Car::get();
        return view('frontend.cars', compact('cars', 'carsfilters', 'countries', 'cities', 'CategoriesCar'));

    }


    public function CheckCar(Request $request)
    {
        $request['category_id'] = $request->array_category_id ?? [];
        $request['array_year'] = $request->array_year ?? [];
        $request['array_color'] = $request->array_color ?? [];
        $request['fixed_price'] = $request->fixed_price ?? [];
        $request['rate'] = $request->rate ?? [];

//        if (isset($request)) {
//            $cars = Car::orWhereIn('category_id', $request->category_id)
//                ->orWhereIn('year', $request->array_year)
//                ->orWhereIn('color', $request->array_color)
//                ->orWhereIn('fixed_price', $request->fixed_price)
//                ->paginate(7);
//        }

//return $request;
        if (!empty($request['category_id']) && !empty($request['array_year']) && !empty($request['array_color']) && !empty($request['fixed_price'])) {

            $cars = Car::WhereIn('category_id', $request->category_id)
                ->WhereIn('year', $request->array_year)
                ->WhereIn('color', $request->array_color)
                ->WhereIn('fixed_price', $request->fixed_price)
                ->paginate(7);
        } elseif (!empty($request['category_id']) && !empty($request['array_year']) && !empty($request['array_color'])) {

            $cars = Car::WhereIn('category_id', $request->category_id)
                ->WhereIn('year', $request->array_year)
                ->WhereIn('color', $request->array_color)
                ->paginate(7);

        } elseif (!empty($request['category_id']) && !empty($request['array_year'])) {


            $cars = Car::WhereIn('category_id', $request->category_id)
                ->WhereIn('year', $request->array_year)
                ->paginate(7);

        } elseif (!empty($request['array_year']) && !empty($request['array_color'])) {


            $cars = Car::WhereIn('year', $request->array_year)
                ->WhereIn('color', $request->array_color)
                ->paginate(7);

        } elseif (!empty($request['category_id']) && !empty($request['fixed_price'])) {

            $cars = Car::WhereIn('category_id', $request->category_id)
                ->WhereIn('fixed_price', $request->fixed_price)
                ->paginate(7);

        } elseif (!empty($request['category_id']) && !empty($request['array_color'])) {

            $cars = Car::WhereIn('category_id', $request->category_id)
                ->WhereIn('color', $request->array_color)
                ->paginate(7);

        } elseif (!empty($request['array_year'])) {

            $cars = Car::WhereIn('year', $request->array_year)
                ->paginate(7);

        } elseif (!empty($request['category_id'])) {
            $cars = Car::WhereIn('category_id', $request->category_id)
                ->paginate(7);

        } elseif (!empty($request['array_color'])) {
            $cars = Car::WhereIn('color', $request->array_color)
                ->paginate(7);

        } elseif (!empty($request['fixed_price'])) {
            $cars = Car::WhereIn('fixed_price', $request->fixed_price)
                ->paginate(7);

        } elseif (!empty($request['rate'])) {


            $rate = CarReview::WhereIn('rate', $request['rate'])->pluck('car_id');

            $cars = Car::WhereIn('id', $rate)
                ->paginate(7);

        }
//        return $cars;
        return view('frontend.carsearch', compact('cars'));

    }


    public function detailcar($id)
    {

        $car = Car::find($id);
        return view('frontend.detailcar', compact('car'));


    }


}
