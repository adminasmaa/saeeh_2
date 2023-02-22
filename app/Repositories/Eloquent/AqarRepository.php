<?php

namespace App\Repositories\Eloquent;


use App\Models\Aqar;
use App\Models\User;
use App\Models\Category;
use App\Repositories\Interfaces\AqarRepositoryInterface as AqarRepositoryInterfaceAlias;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class AqarRepository implements AqarRepositoryInterfaceAlias
{
    public function getAll($data)
    {

//        return $data->query();

        return $data->render('dashboard.aqars.index', [
            'title' => trans('site.aqars'),
            'model' => 'aqars',
            'count' => $data->count(),

        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.

        $users = User::all();
        $categories = Category::all();
        return view('dashboard.aqars.create', compact('users', 'categories'));
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.

        $aqar = Aqar::find($Id);
        $users = User::all();
        $categories = Category::all();

        return view('dashboard.aqars.edit', compact('aqar', 'users', 'categories'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.

        $aqar = Aqar::find($Id);
        $users = User::all();
        $categories = Category::all();

        return view('dashboard.aqars.show', compact('aqar', 'users', 'categories'));
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->except(['display_photo','notify_photo']);

        // To Make  Active

        $aqar = Aqar::create($request_data);

        if ($request->hasFile('display_photo')) {
            $thumbnail = $request->file('display_photo');
            $destinationPath = 'images/aqars/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $aqar->display_photo = $filename;
            $aqar->save();
        }

        if ($request->hasFile('notify_photo')) {
            $thumbnail = $request->file('notify_photo');
            $destinationPath = 'images/aqars/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $aqar->notify_photo = $filename;
            $aqar->save();
        }
       
        if ($aqar) {
//            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.aqars.index');

        }
    }

    public function update($aqar, $request)
    {
        // TODO: Implement update() method.

        $request_data = $request->except(['display_photo', '_token', '_method', 'notify_photo']);
        $aqar->update($request_data);


        if ($request->hasFile('display_photo')) {
            $thumbnail = $request->file('display_photo');
            $destinationPath = 'images/aqars/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $aqar->display_photo = $filename;
            $aqar->save();
        }

        if ($request->hasFile('notify_photo')) {
            $thumbnail = $request->file('notify_photo');
            $destinationPath = 'images/aqars/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $aqar->notify_photo = $filename;
            $aqar->save();
        }
        if ($aqar) {
//            Alert::success('Success', __('site.updated_successfully'));

            return redirect()->route('dashboard.aqars.index');
//            session()->flash('success', __('site.updated_successfully'));
        } else {
//            Alert::success('Success', __('site.update_faild'));

            return redirect()->route('dashboard.aqars.index');

        }
    }


    public function destroy($aqar)
    {
        // TODO: Implement destroy() method.
//        $result=DB::table('categories')->where('id',$category->id)->delete();
        $result = $aqar->delete();
        if ($result) {
//                Alert::toast('Success', __('site.deleted_successfully'));
        } else {
//                Alert::toast('Success', __('site.delete_faild'));

//                session()->flash('error', __('site.delete_faild'));
        }

        return back();
    }
}
