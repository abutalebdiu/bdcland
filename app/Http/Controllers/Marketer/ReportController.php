<?php

namespace App\Http\Controllers\Marketer;

use App\Models\Plot;
use App\Models\Report;
use App\Models\Status;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\CustomerByUser;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = Report::query();


        if($request->status_id)
        {
            $data['status_id'] = $request->status_id;
            $query->where('status_id',$request->status_id);
        }

        if($request->customer_id)
        {
            $data['customer_id'] = $request->customer_id;
            $query->where('customer_id',$request->customer_id);
        }


        if($request->from_date && $request->date_to){

            $data['from_date'] = $request->from_date;
            $data['date_to'] = $request->date_to;

            $from_date  = date_create($request->from_date." 00:00:00");
            $date_to    = date_create($request->date_to." 23:59:59");


            $ds = date_format($from_date, "Y/m/d H:i:s");
            $de = date_format($date_to, "Y/m/d H:i:s");

            $query = $query->whereBetween('created_at',[$ds,$de]);
        }


        $data['reports']   =  $query->where('user_id',auth::user()->id)->latest()->get();
        $data['customers'] = CustomerByUser::where('user_id',Auth::user()->id)->get();
        $data['plots']     = Plot::get();
        $data['statuses']   = Status::get();

        return view('marketers.crm.report.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['customers'] = CustomerByUser::where('user_id',Auth::user()->id)->get();
        $data['plots']      = Plot::get();
        $data['statues']    = Status::get();

        return view('marketers.crm.report.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

            $request->validate([
                'customer_id'=> 'required',
                'plot_id'=> 'required',
                'visit_date'=> 'required',
                'status_id'=> 'required',

            ]);


            $data = New Report();
            $input = $request->except('_token');
            $input['user_id'] = Auth::user()->id;
            $data->fill($input)->save();

            Notify::success('Report Create Successfully');
            return redirect()->route('marketer.report.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['report'] = Report::findOrFail($id);
        return view('marketers.crm.report.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['report']     = Report::findOrFail($id);
        $data['customers']  = CustomerByUser::where('user_id',Auth::user()->id)->get();
        $data['plots']      = Plot::get();
        $data['statues']    = Status::get();

        return view('marketers.crm.report.edit',$data);
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
            'plot_id'       => 'required',
            'visit_date'    => 'required',
            'status_id'     => 'required',
        ]);

        if(Auth::user())
        {
            $data = Report::findOrFail($id);
            $input = $request->except('_token');
            $data->fill($input)->save();

            Notify::success('Report Update Successfully');
            return redirect()->route('marketer.report.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Report::findOrFail($id)->delete();
        Notify::success('Report Delete Successfully');
        return redirect()->back();
    }
}
