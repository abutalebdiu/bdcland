<?php

namespace App\Http\Controllers\Admin\CRM;

use App\Models\Plot;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class PlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['plots'] = Plot::get();
        return view('admin.crm.plot.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crm.plot.create');
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
            'name'=> 'required',
            'address'=> 'required',
            'contact'=> 'required|numeric',
            'status'=> 'required',
        ]);

        $data = new Plot();
        $data->name = $request->name;
        $data->address = $request->address;
        $data->contact = $request->contact;
        $data->status = $request->status;
        $data->save();

        Notify::success('Plot Create Successfully');
        return redirect()->route('admin.plot.index');
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
        $data['plot'] = Plot::findOrFail($id);
        return view('admin.crm.plot.edit',$data);
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
            'name'=> 'required',
            'address'=> 'required',
            'contact'=> 'required|numeric',
            'status'=> 'required',
        ]);

        $data = Plot::findOrFail($id);
        $data->name = $request->name;
        $data->address = $request->address;
        $data->contact = $request->contact;
        $data->status = $request->status;
        $data->save();

        Notify::success('Plot Update Successfully');
        return redirect()->route('admin.plot.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Plot::findOrFail($id)->delete();
        Notify::success('Plot Delete Successfully');
        return redirect()->back();
    }
}
