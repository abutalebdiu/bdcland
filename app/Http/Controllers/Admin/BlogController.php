<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogcategories = BlogCategory::latest()->get();
        $users = User::all();
        return view('admin.blogs.create',compact('blogcategories','users'));
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
         ]);

         $blog = Blog::create($request->except('_token'));
         $blog->uploadRequestFile('image')->saveInto('image');
         $blog->save();
         Notify::success('Blog Create Successfully');
         return redirect()->route('admin.blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blogcategories = BlogCategory::latest()->get();
        $users = User::all();

        return view('admin.blogs.edit',compact('blog','users','blogcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {

        $request->validate([
            'title' => 'required',
         ]);

        $blog->update($request->except('_token','image'));

        if($request->image){
            $blog->deleteWithFile('image');
         }
         $blog->uploadRequestFile('image')->saveInto('image');
         $blog->save();

        Notify::success('Blog Update Successfully');
        return redirect()->route('admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {

        $blog = Blog::findOrFail($blog->id);
        $blog->deleteWithFile('image');
        $blog->delete();

        Notify::success('Blog Delete Successfully');
        return redirect()->route('admin.blog.index');
    }
}
