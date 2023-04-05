<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlogComment;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class BlogCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blog_Comment'] = BlogComment::latest()->get();
        return view('admin.blog-comment.index',$data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['comment'] = BlogComment::findOrFail($id);
        return view('admin.blog-comment.edit',$data);
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
            'comment' => 'required',
            'status' => 'required'
        ]);

      
        $blog = BlogComment::findOrFail($id);
        $blog->comment = $request->comment;
        $blog->status = $request->status;
        $blog->save();
       
        Notify::success('Blog Comment Update Successfully');
        return redirect()->route('admin.blog-comment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BlogComment::findOrFail($id)->delete();
        Notify::success('Blog Comment Delete Successfully');
        return redirect()->back();
    }
}