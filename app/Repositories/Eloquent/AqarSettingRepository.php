<?php

namespace App\Repositories\Eloquent;


use App\Models\AqarSetting;
use App\Models\Category;
use App\Models\AnotherRoom;
use App\Models\Area;
use App\Models\Floor;
use App\Models\FloorNumber;
use App\Models\Crew;
use App\Models\FreeService;
use App\Models\Service;
use App\Models\Bathroom;
use App\Models\Kitchen;
use App\Models\Laundry;
use App\Models\ConditionType;
use App\Models\CarPosition;
use App\Models\Pool;
use App\Repositories\Interfaces\AqarSettingRepositoryInterface as AqarSettingRepositoryInterfaceAlias;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Alert;
class AqarSettingRepository implements AqarSettingRepositoryInterfaceAlias
{
    public function getAll($data)
    {

//        return $data->query();

        return $data->render('dashboard.aqar_setting.index', [
            'title' => trans('site.aqar_setting'),
            'model' => 'aqar_setting',
            'count' => $data->count(),

        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.

        $categories = Category::where('type',1)->where('active',1)->get();
       
        return view('dashboard.aqar_setting.create', compact( 'categories'));
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.

        $aqarSetting = AqarSetting::find($Id);
        $details= AqarSetting::where('category_id',$aqarSetting->category_id)->get();
        $categories = Category::where('type',1)->where('active',1)->get();
        return view('dashboard.aqar_setting.edit', compact('aqarSetting', 'categories','details'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.

        $aqarSetting = AqarSetting::find($Id);
        $categories = Category::where('type',1)->where('active',1)->get();
        return view('dashboard.aqar_setting.show', compact('aqarSetting','categories'));
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $aqarSetting = AqarSetting::create($request_data);

        if ($aqarSetting) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.aqar_setting.index');

        }
    }

    public function update($aqarSetting, $request)
    {
        // TODO: Implement update() method.

        $request_data = $request->all();
        $aqarSetting->update($request_data);

        if ($aqarSetting) {
            Alert::success('Success', __('site.updated_successfully'));

            return redirect()->route('dashboard.aqar_setting.index');
//            session()->flash('success', __('site.updated_successfully'));
        } else {

            return redirect()->route('dashboard.aqar_setting.index');
        }
    }

    public function destroy($aqarSetting)
    {
        // TODO: Implement destroy() method.
//        $result=DB::table('categories')->where('id',$category->id)->delete();
        $result = $aqarSetting->delete();
        if ($result) {
                Alert::toast('Success', __('site.deleted_successfully'));
        } else {
                Alert::toast('Error', __('site.delete_faild'));

          //      session()->flash('error', __('site.delete_faild'));
        }

        return back();
    }

    public function getsetting($id)
    { 
        $details = AqarSetting::where('category_id',$id)->get();
        return view('dashboard.aqar_setting.table', compact('details'));
    }

    public function active_input_display($id,$check)
    { 
        $aqarSetting = AqarSetting::find($id);
        $aqarSetting =AqarSetting::where('ID', $id)->update(['display' => (int)$check]);
        echo  __('site.updated_successfully');
    }


    public function active_input_required($id)
    { 
        return $this->AqarSettingRepository->active_input_required($id);
    }
}
