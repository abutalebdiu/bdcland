<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProjectType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use App\Models\Project;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['projects'] = Project::latest()->get();
        return view('admin.projects.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['projecttypess'] = ProjectType::all();
        return view('admin.projects.create',$data);
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
            'title' => 'required',
            'project_type_id' => 'required'
        ]);
        $project = Project::create($request->except(['images','layout']));

        // if($request->has('image'))
        // {
        //     $project->uploadRequestFile('image')->saveInto('image');
        // }

        if ($request->has('images')) {
            $project->uploadRequestFiles('images')->saveInto('images', true);
        }

        if($request->has('layout'))
        {
            $project->uploadRequestFile('layout')->saveInto('layout');
        }
        Notify::success('Project Create Successfully');
        return redirect()->route('admin.project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $projecttypess = ProjectType::all();
        return view('admin.projects.edit',compact('project','projecttypess'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'project_type_id' => 'required'
        ]);

        if($request->has('images'))
        {
            $project->deleteWithFile('images');
        }

        if($request->has('layout'))
        {
            $project->deleteWithFile('layout');
        }

        $project->update($request->except(['images']));

        if ($request->has('images')) {
            $project->uploadRequestFiles('images')->saveInto('images', true);
        }

        if($request->has('layout')){
            $project->uploadRequestFile('layout')->saveInto('layout');
        }




        Notify::success('Project update Successfully');
        return redirect()->route('admin.project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {

        // $project->deleteWithFile('image');
        // $project->deleteWithFile('layout');
        $project->delete();
        Notify::success('Project delete Successfully');
        return redirect()->route('admin.project.index');
    }
}
