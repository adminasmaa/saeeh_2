<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SettingController extends Controller
{


//    private CountryRepositoryInterface $countryRepository;
//
//    public function __construct(CountryRepositoryInterface $countryRepository)
//    {
//        $this->countryRepository = $countryRepository;
//    }

    public function index()
    {

        return view('dashboard.settings.index');
    }


    public function update(Request $request)
    {
//        $request->validate([
//            'name' => ['required'],
//
//        ]);
//
//        return $this->countryRepository->update($country, $request);


    }//end of update


}
