<?php

namespace App\Repositories\Eloquent;

use App\Models\Country;
use App\Models\Role;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface as IUserRepositoryAlias;
use Intervention\Image\Facades\Image;

class UserRepository implements IUserRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.users.index', [
            'title' => trans('site.users'),
            'model' => 'users',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.

        $roles = Role::all();
        $countries = Country::all();

        return view('dashboard.users.create', compact('roles', 'countries'));
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.
        $roles = Role::all();

        $user = User::find($Id);

        $countries = Country::all();


        return view('dashboard.users.edit', compact('user', 'roles', 'countries'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.


        $user = User::find($Id);

        $countries = Country::all();


        $roles = Role::all();

        return view('dashboard.users.show', compact('user', 'roles', 'countries'));
    }

    public function destroy($user)
    {
        // TODO: Implement destroy() method.

        $result = $user->delete();
        if ($result) {
//                Alert::toast('Success', __('site.deleted_successfully'));
        } else {
//                Alert::toast('Success', __('site.delete_faild'));

//                session()->flash('error', __('site.delete_faild'));
        }

        return back();
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->except(['password_confirmation', 'permissions', 'roles', 'image']);

        // To Make User Active
        $request_data['active'] = 1;
        $request_data['account_type'] = 'User';

        $request_data['password'] = bcrypt($request->password);
        $user = User::create($request_data);


        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
            $destinationPath = 'images/employee/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $user->image = $filename;
            $user->save();
        }

        if ($request->roles) {
            // $user->attachRole('admin');
            $user->syncRoles($request->roles);
        }

        if ($user) {
//            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.users.index');

        }
    }

    public function update($user, $request)
    {
        // TODO: Implement update() method.


        $request_data = $request->except(['permissions', 'roles', 'password_confirmation']);
        if (!empty($request->password)) {
            $request_data['password'] = bcrypt($request->password);
        } else {
            $request_data = $request->except(['permissions', 'roles', 'password', 'password_confirmation']);
        }

        $user->update($request_data);


        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
            $destinationPath = 'images/employee/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $user->image = $filename;
            $user->save();
        }

        if (isset($request->roles)) {
            $user->syncRoles($request->roles);
        }
        if ($user) {
//            Alert::success('Success', __('site.updated_successfully'));

            return redirect()->route('dashboard.users.index');
//            session()->flash('success', __('site.updated_successfully'));
        } else {
//            Alert::success('Success', __('site.update_faild'));

            return redirect()->route('dashboard.users.index');

        }
    }
}
