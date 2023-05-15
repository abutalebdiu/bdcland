<?php

namespace App\Http\Controllers\Admin\CRM;

use App\Models\Customer;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Excel;
use App\Imports\CustomersImport;
use App\Models\CustomerByUser;
use App\Models\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Customer::query();

        if($request->from_date && $request->date_to){

            $data['from_date'] = $request->from_date;
            $data['date_to'] = $request->date_to;

            $from_date  = date_create($request->from_date." 00:00:00");
            $date_to    = date_create($request->date_to." 23:59:59");


            $ds = date_format($from_date, "Y/m/d H:i:s");
            $de = date_format($date_to, "Y/m/d H:i:s");

            $query = $query->whereBetween('created_at',[$ds,$de]);
        }

        if($request->name)
        {
            $data['name'] = $request->name;
            $query = $query->where('name','like','%'.$request->name.'%');
        }
        if($request->phone)
        {
            $data['phone'] = $request->phone;
            $query = $query->where('phone','like','%'.$request->phone.'%');
        }
        if($request->email)
        {
            $data['email'] = $request->email;
            $query = $query->where('email','like','%'.$request->email.'%');
        }

        $data['customers'] = $query->latest()
                            ->paginate(300);

        return view('admin.crm.customer.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crm.customer.create');
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
            'companyname'=> 'required',
            'designation'=> 'required',
            'phone'=> 'required|numeric',
            'address'=> 'required',
            'email'=> 'email',
            'status'=> 'required',
        ]);

        $data = new Customer();
        $data->name = $request->name;
        $data->companyname = $request->companyname;
        $data->designation = $request->designation;
        $data->phone = $request->phone;
        $data->alternative_phone = $request->alternative_phone;
        $data->email = $request->email;
        $data->alternative_email = $request->alternative_email;
        $data->address = $request->address;
        $data->campain_id = $request->campain_id;
        $data->status = $request->status;
        $data->save();

        Notify::success('Customer Create Successfully');
        return redirect()->route('admin.customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['customer'] = Customer::findOrFail($id);
        return view('admin.crm.customer.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['customer'] = Customer::findOrFail($id);
        return view('admin.crm.customer.edit',$data);
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
            'companyname'=> 'required',
            'designation'=> 'required',
            'phone'=> 'required|numeric',
            'address'=> 'required',
            'email'=> 'email',
            'status'=> 'required',
        ]);

        $data = Customer::findOrFail($id);
        $data->name = $request->name;
        $data->companyname = $request->companyname;
        $data->designation = $request->designation;
        $data->phone = $request->phone;
        $data->alternative_phone = $request->alternative_phone;
        $data->email = $request->email;
        $data->alternative_email = $request->alternative_email;
        $data->address = $request->address;
        $data->campain_id = $request->campain_id;
        $data->status = $request->status;
        $data->save();

        Notify::success('Customer Update Successfully');
        return redirect()->route('admin.customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();
        Notify::success('Customer Delete Successfully');
        return redirect()->back();
    }


    public function customercsvupload(Request $request)
    {

        $file = $request->customercsv;
        Excel::import(new CustomersImport,$request->file('customercsv')->store('files'));

        Notify::success('Customer Data Upload Successfully');
        return redirect()->back();
    }


    public function customermodal(Request $request)
    {
        $data['customer'] = Customer::find($request->customer_id);
        $data['users'] = User::where('status',1)->get();
        return view('admin.crm.customer.marketer',$data);
    }



    public function customerassign(Request $request)
    {
        $data['customers'] = Customer::get();
        $data['users'] = User::where('status',1)->get();
        return view('admin.crm.customer.customerunassign',$data);
    }

    public function customerassignstore(Request $request)
    {
        $input = $request->all();

        foreach($input['customer_id'] as $key => $value)
        {
            $data = new CustomerByUser();
            $data->user_id     = $request->user_id;
            $data->customer_id = $input['customer_id'][$key];
            $data->save();
        }

        Notify::success('Customer Assign Successfully');
        return redirect()->route('admin.customer.index');
    }


}
