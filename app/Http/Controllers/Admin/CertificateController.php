<?php

namespace App\Http\Controllers\Admin;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class CertificateController extends Controller
{
    public function index()
    {
        $data['certificates'] = Certificate::latest()->get();
        return view('admin.certificates.index',$data);
    }


    public function create()
    {
        return view('admin.certificates.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $certificate = Certificate::create($request->except(['image']));
        $certificate->uploadRequestFile('image')->saveInto('image');

        Notify::success('Certificate Create Successfully');
        return redirect()->route('admin.certificate.index');
    }


    public function show(Certificate $certificate)
    {
        return view('admin.certificates.show',compact('certificate'));
    }


    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit',compact('certificate'));
    }


    public function update(Request $request, Certificate $certificate)
    {
        $request->validate([
            'name' => 'required'
        ]);

        if($request->has('image'))
        {
            $certificate->deleteWithFile('image');
        }

        $certificate->update($request->except(['image']));
        $certificate->uploadRequestFile('image')->saveInto('image');

        Notify::success('Certificate Update Successfully');
        return redirect()->route('admin.certificate.index');
    }


    public function destroy(Certificate $certificate)
    {
        $certificate->deleteWithFile('image');
        $certificate->delete();

        Notify::success('Certificate delete Successfully');
        return redirect()->route('admin.certificate.index');
    }
}
