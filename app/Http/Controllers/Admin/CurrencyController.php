<?php

namespace App\Http\Controllers\Admin;

use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['currencies'] =  Currency::latest()->get();
        return view('admin.currencies.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.currencies.create');
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
            'name'      => 'required',
            'code'      => 'required',
            'symbol'    => 'required',
            'rate'      => 'required',
            'status'    => 'required',
        ]);

        Currency::create($request->except('_token'));

        Notify::success('Currency Create Successfully');
        return redirect()->route('admin.currency.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        return view('admin.currencies.edit',compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currency $currency)
    {
        $request->validate([
            'name'      => 'required',
            'code'      => 'required',
            'symbol'    => 'required',
            'rate'      => 'required',
            'status'    => 'required',
        ]);

        $currency->update($request->except('_token'));

        Notify::success('Currency Update Successfully');
        return redirect()->route('admin.currency.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $currency)
    {
        $currency->delete();

        Notify::success('Currency Delete Successfully');
        return redirect()->route('admin.currency.index');
    }
}
