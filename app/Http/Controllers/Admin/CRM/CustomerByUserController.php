<?php

namespace App\Http\Controllers\Admin\CRM;

use App\Models\CustomerByUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Plusemon\Notify\Facades\Notify;

class CustomerByUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //  $request->validate([
        //     'user_id'=> 'required',
        //     'customer_id'=> 'required'
        // ]);

        $data = new CustomerByUser();
        $data->user_id     = $request->user_id;
        $data->customer_id = $request->customer_id;
        $data->save();

        Notify::success('Customer Assign Successfully');
        return redirect()->route('admin.customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerByUser  $customerByUser
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerByUser $customerByUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerByUser  $customerByUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerByUser $customerByUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerByUser  $customerByUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerByUser $customerByUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerByUser  $customerByUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CustomerByUser::find($id)->delete();

        Notify::success('Customer Assign Successfully Removed!');
        return redirect()->back();
    }
}
