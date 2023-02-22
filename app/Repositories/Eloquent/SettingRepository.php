<?php

namespace App\Repositories\Eloquent;

use App\Models\Setting;
use App\Repositories\Interfaces\SettingRepositoryInterface as ISettingRepositoryAlias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Alert;



class SettingRepository implements ISettingRepositoryAlias
{
    public function __construct(Setting $setting)
    {
        $this->setting = new Setting();
    }

    public function getAll()
    {

//        $settings = Setting::first();
//
//        return $settings;
//        return view('dashboard.settings.index');
    }

    public function update($request)
    {
        // TODO: Implement update() method.

//

        $request_data = $request->except(['logo']);


        $setting = Setting::firstOrCreate();
        $settings = $setting->update($request_data);


        if ($request->hasFile('logo')) {
            $thumbnail = $request->file('logo');
            $destinationPath = 'images/settings/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $setting->logo = $filename;

            $setting->save();
        }


        if ($setting) {
            Alert::success('Success', __('site.updated_successfully'));

            return redirect()->route('dashboard.settings.index');
        } else {
            Alert::error('Error', __('site.update_faild'));

            return redirect()->route('dashboard.settings.index');

        }
    }

    public function create()
    {

    }

    public function edit($id)
    {


    }

    public function show($id)
    {


    }

    public function destroy($id)
    {


    }

    public function store($request)
    {

    }



}
