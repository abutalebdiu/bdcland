<?php

namespace App\Http\Controllers\Admin;

use App\Models\WebSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Plusemon\Notify\Facades\Notify;
class WebSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['websetting'] = WebSetting::find(1);
        return view('admin.websetting.index',$data);
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
     * @param  \App\Models\WebSetting  $webSetting
     * @return \Illuminate\Http\Response
     */
    public function show(WebSetting $websetting)
    {
         return view('admin.websetting.edit',compact('websetting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebSetting  $webSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(WebSetting $webSetting)
    {
        return view('admin.websetting.edit',compact('websetting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WebSetting  $webSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebSetting $websetting)
    {

        if($request->has('logo'))
        {
           // $websetting->deleteWithFile('logo');
        }

        $websetting->update($request->except(['logo']));
        $websetting->uploadRequestFile('logo')->saveInto('logo');
        $websetting->uploadRequestFile('mobile_logo')->saveInto('mobile_logo');
        $websetting->uploadRequestFile('favicon')->saveInto('favicon');
        $websetting->uploadRequestFile('footer_logo')->saveInto('footer_logo');


        Notify::success('Web Setting Update Successfully');
        return redirect()->route('admin.websetting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebSetting  $webSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebSetting $webSetting)
    {
        //
    }
}
