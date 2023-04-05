<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Models\District;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['districtes'] = District::latest()->get();
        return view('admin.district.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['countries'] = Country::get();
        return view('admin.district.create',$data);
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
            'country_id' => 'required',
        ]);

       $data = new District();
       $input = $request->except('_token');
       $data->fill($input)->save();
       Notify::success('District Create Successfully');
       return redirect()->route('admin.district.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['district'] = District::findOrFail($id);
        $data['countries'] = Country::get();
        return view('admin.district.edit',$data);
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
            'country_id' => 'required',
        ]);

       $data = District::findOrFail($id);
       $input = $request->except('_token');
       $data->fill($input)->save();
       Notify::success('District Update Successfully');
       return redirect()->route('admin.district.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        District::findOrFail($id)->delete();
        Notify::success('Delete Successfully');
        return redirect()->back();
    }
}
