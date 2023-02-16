<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Repositories\Interfaces\SettingRepositoryInterface;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SettingController extends Controller
{


    private SettingRepositoryInterface $settingRepository;

    public function __construct(SettingRepositoryInterface $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

    public function index()
    {
        $setting = Setting::first();


        return view('dashboard.settings.index', compact('setting'));


//        $this->settingRepository->getAll();


    }


    public function update(Request $request)
    {


        $request->validate([
            'terms_conditions' => ['required'],
            'website_address' => ['required'],
            'email' => ['required'],
            'website_link' => ['required'],

        ]);

        return $this->settingRepository->update($request);


    }//end of update


}
