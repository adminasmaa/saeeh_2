<?php

namespace App\Repositories\Eloquent;

use App\Models\Setting;
use App\Models\HomeServices;
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
        $this->home_serviecs = new HomeServices();
    }

    public function getAll()
    {
//        $settings = Setting::first();
//        return $settings;
//        return view('dashboard.settings.index');
    }

    public function update($home_serviecs,$request)
    {
       // return $request->file('logo');
       // $request_data = $request->except(['logo', 'image']);
         $request_data = $request->except(['_token', '_method','logo', 'image', 'sub_name_ar', 'sub_name_en', 'sub_description_ar', 'sub_description_en']);
        $setting = Setting::firstOrCreate();
        $setting1 = $setting->update($request_data);

        if ($request->hasFile('logo')) {
            UploadImage('images/settings/','logo', $setting, $request->file('logo'));
    
            }
        // $home_serviecs->update($request_data);

        $arr = $request->sub_name_ar;

        if ($arr[0]!=null) {
            foreach ($request->sub_name_ar as $key => $value) {
                $data=HomeServices::updateOrCreate([
                    'id' => $request['s_id'][$key]??0
                ],[
                    'title_ar' => $request['sub_name_ar'][$key],
                    'title_en' => $request['sub_name_en'][$key],
                    'description_ar' => $request['sub_description_ar'][$key],
                    'description_en' => $request['sub_description_en'][$key],
                  //  'parent_id' => $home_serviecs->id
                ]);
        // $home_serviecs1=$home_serviecs->updateOrCreate($request_data2);
        // return $data->id;
        $home_serviecs1=HomeServices::find($data->id);
        // $home_serviecs1=$home_serviecs1->update($request_data);
        $k= $request['item'][$key];//
        // return   $request['item'][$key];
        if ($_FILES['image']['name'][$k]) {
            UploadImage('images/home_serviecs/','image', $home_serviecs1, $request->file('image')[$k]);
            }
          }
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

    public function destroy($home_serviecs)
    {
        // TODO: Implement destroy() method.
        $result = $home_serviecs->delete();
        if ($result) {
            Alert::toast('Deleted', __('site.deleted_successfully'));
        } else {
            Alert::toast('Deleted', __('site.delete_faild'));
        }
        return back();
    }

    public function store($request)
    {

    }

}
