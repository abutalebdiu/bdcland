<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProjectType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class ProjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['projecttypes'] = ProjectType::where('p_id','0')->orWhereNull('p_id')->get();
        return view('admin.projecttypes.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['projecttypes'] = ProjectType::where('p_id','0')->orWhereNull('p_id')->get();
        return view('admin.projecttypes.create',$data);
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
            'name_bn' => 'required',
        ]);

        $type = ProjectType::create($request->except(['_token']));

        Notify::success('Project Type Create Successfully');
        return redirect()->route('admin.projecttype.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectType $projectType)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectType $projecttype)
    {

        return view('admin.projecttypes.edit',compact('projecttype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectType $projecttype)
    {
        $request->validate([
            'name' => 'required',
            'name_bn' => 'required',
        ]);
        $projecttype->update($request->except(['_token']));

        Notify::success('Project Type Update Successfully');
        return redirect()->route('admin.projecttype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectType $projecttype)
    {
        $projecttype->delete();

        Notify::success('Project Type Delete Successfully');
        return redirect()->route('admin.projecttype.index');
    }
}
