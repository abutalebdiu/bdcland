<?php

namespace App\Http\Controllers\Admin;

use App\Models\EmailSetting;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class EmailSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['emailsetting']= EmailSetting::first();
        return view('admin.emailsettings.edit',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmailSetting  $emailSetting
     * @return \Illuminate\Http\Response
     */
    public function show(EmailSetting $emailSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmailSetting  $emailSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailSetting $emailSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmailSetting  $emailSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmailSetting $emailSetting)
    {
        $request->validate([
            'smtp_host'     => 'required',
            'smtp_port'     => 'required',
            'smtp_username' => 'required',
            'smtp_password' => 'required',
            'from_email'    => 'required',
            'from_name'     => 'required',
        ]);

       $data = $emailSetting;
       $input = $request->except('_token');
       $data->fill($input)->save();
       Notify::success('Email Setting Update Successfully');
       return redirect()->route('admin.emailsetting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmailSetting  $emailSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailSetting $emailSetting)
    {
        //
    }
}
