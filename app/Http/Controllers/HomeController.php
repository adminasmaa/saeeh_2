<?php

namespace App\Http\Controllers;

use App\Models\Aqar;
use App\Models\Car;
use App\Models\Notification;
use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cars = Car::count();

        $places = Place::count();

        $aqars = Aqar::count();

        $users=User::count();

        $notifications=Notification::count();

        return view('home', compact('cars', 'places', 'aqars','users','notifications'));
    }



}
