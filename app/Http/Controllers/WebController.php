<?php

namespace App\Http\Controllers;

use App\Models\News;

use App\Models\Slider;
use App\Models\Contact;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Models\Gallery;
use App\Models\ProjectType;
use App\Models\Taxassessment;

class WebController extends Controller
{

    public function index()
    {
        $data['sliders'] = Slider::latest()->get();
        $data['news']    = News::limit(4)->get();
        return view('web.index', $data);
    }

    public function gallery()
    {
        $data['galleries'] = Gallery::latest()->get();
        return view('web.gallery',$data);
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

    public function aboutus()
    {
        return view('web.aboutus');
    }


}
