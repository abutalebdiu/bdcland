<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\News;
use App\Models\Slider;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;



class WebController extends Controller
{

    public function index()
    {
        $data['sliders']        = Slider::latest()->get();
        $data['news']           = News::limit(4)->get();
        $data['projects']       = Project::where('status','Active')->get();
        $data['certificates']   = Certificate::where('status','Active')->get();

        return view('web.index', $data);
    }

    public function gallery()
    {
        $data['galleries'] = Gallery::latest()->get();
        return view('web.gallery',$data);
    }


    public function blogs()
    {
        $data['blogs'] = Blog::latest()->get();
        return view('web.blogs',$data);
    }

    public function aboutus()
    {
        return view('web.aboutus');
    }


    public function projects(Request $request)
    {
        $query = Project::query();

        if($request->project_type_id)
        {
            $query = $query->where('project_type_id',$request->project_type_id);
        }

        $data['projects']   = $query->where('status','Active')->get();

        return view('web.projects',$data);
    }

    public function projectsdetail($id)
    {
        $data['project'] = Project::find($id);
        $data['projects']   = Project::whereNotIn('id',[$id])->where('status','Active')->get();
        return view('web.projectsdetail',$data);
    }


    public function contactus()
    {
        return view('web.contactus');
    }


    public function contactstore(Request $request)
    {
        Contact::create($request->except('_token'));

        Notify::success('Message Send Successfully');
        return redirect()->back();
    }


    public function booking()
    {

        return view('web.booking');
    }


    public function bookingstore(Request $request)
    {
        Booking::create($request->except('_token'));

        Notify::success('Booking Send Successfully');
        return redirect()->back();
    }
}
