<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use App\Models\CustomerByUser;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::where('usertype','admin')->get();
        return view('admin.users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['roles'] = Role::all();
        return view('admin.users.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => ['required', 'numeric'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'mobile' => 'required|numeric|unique:users',
        ]);

        $data = new User;
        $data->name = $request->name;
        $data->name_bn = $request->name_bn;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->role_id  = 1;
        $data->usertype  = $request->usertype;
        $data->save();

        Notify::success('User Create Successfully');
        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['user'] = User::findOrFail($id);
        return view('admin.users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['roles'] = Role::all();
        $data['user']  = User::findOrFail($id);
        return view('admin.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => ['required', 'numeric'],
            'email' => "required|string|email|max:255|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|unique:users,email,$id",
            'mobile' => "required|numeric|unique:users,mobile,$id",
        ]);

        $data = User::findOrFail($id);
        $data->name   = $request->name;
        $data->name_bn = $request->name_bn;
        $data->mobile = $request->mobile;
        $data->email  = $request->email;

        if ($request->password) {
            $data->password = bcrypt($request->password);
        }
        $data->role_id  = $request->role_id;
        $data->save();

        Notify::success('User Update Successfully');
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::findOrFail($id)->delete();
        Notify::success('User Delete Successfully');
        return redirect()->back();
    }



    public function userPermission($user)
    {
        $user = User::find($user);
        $data['permissions'] = Permission::get();
        $data['user'] = $user;
        $data['user_permissions'] = $user->getAllPermissions();
        return view('admin.users.user-permission', $data);
    }


    public function userPermissionUpdate(Request $request, $user)
    {
        $user = User::find($user);
        $user->syncPermissions($request->get('permissions'));

        Notify::success('User Permission Update Successfully');
        return redirect()->back();
    }


    public function users()
    {
        $data['users'] = User::where('usertype','user')->get();
        return view('admin.users.users',$data);
    }


    public function vendors()
    {
        $data['users'] = User::where('usertype','vendor')->get();
        return view('admin.users.vendors',$data);
    }



}
