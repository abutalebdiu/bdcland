<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use App\Models\SocialMedia;


class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['socialmedias'] = SocialMedia::latest()->get();
        return view('admin.socialmedias.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.socialmedias.create');
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
            'icon' => 'required',
            'link' => 'required'
         ]);


         SocialMedia::create($request->except('_token'));

         Notify::success('Social Media Create Successfully');
        return redirect()->route('admin.socialmedia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function show(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialMedia $socialmedia)
    {
        return view('admin.socialmedias.edit',compact('socialmedia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMedia $socialmedia)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'required',
            'link' => 'required'
         ]);


         $socialmedia->update($request->except('_token'));

        Notify::success('Social Media Update Successfully');
        return redirect()->route('admin.socialmedia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $socialmedia)
    {
        $socialmedia->delete();

        Notify::success('Social Media Delete Successfully');
        return redirect()->route('admin.socialmedia.index');
    }
}
