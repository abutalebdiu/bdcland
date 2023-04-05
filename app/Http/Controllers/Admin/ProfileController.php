<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function profile(){
        $data['profile'] = User::findOrFail(Auth::user()->id);
        return view('admin.profile.profile',$data);
    }

    public function profileEdit(){
        $data['profile'] = User::findOrFail(Auth::user()->id);
        return view('admin.profile.profile-edit',$data);
    }

    public function profileEditPost(Request $request){

        $request->validate([
            'name' => 'required',
            'mobile' => 'required|numeric',
            'email' => 'required'
        ]);

        $data = User::findOrFail(Auth::user()->id);
        $data->name     = $request->name;
        $data->name_bn  = $request->name_bn;
        $data->email    = $request->email;
        $data->mobile   = $request->mobile;
        $data->save();

        $data->uploadRequestFile('avatar')->saveInto('avatar');

        Notify::success('Profile Update Successfully');
        return redirect()->route('admin.profile');
    }

    public function profilePasswordChange(){
        $data['profile'] = User::findOrFail(Auth::user()->id);
        return view('admin.profile.password-change',$data);
    }

    public function profilePasswordChangePost(Request $request){

        $request->validate([
            'current_password' => ['required'],
            'password' => ['required'],
            'new_confirm_password' => ['same:password'],
        ]);

        if (!(Hash::check($request->current_password, Auth::user()->password))) {
            Notify::error('Current Password Doesn\'t Match');
            return redirect()->back();
        }else{
            User::find(auth()->user()->id)->update(['password'=>bcrypt($request->password)]);
            Notify::success('Password Change Successfully');
            return redirect()->route('admin.profile');
        }
    }
}
