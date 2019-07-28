<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Image;

class BlogListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('agent.blogList')->with('blogs',$blogs);
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
        $blog=Blog::findorFail($id);
        return view('agent.blogList')->with('blog', $blog);
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
            'title'=>'required',
            'description'=>'required',
        ]);
            $blog=Blog::find($id);
            $blog->title = $request->title;
            $blog->description = $request->description;

            //image
            if($request->hasFile('filename')){
                $image=$request->file('filename');
                $namefile=time().'.'.$image->getClientOriginalExtension();
                $location=public_path('image/'.$namefile);
                Image::make($image)->resize(300,300)->save($location);
                $blog->filename=$namefile;
            }

            $blog->update();
            return redirect('/blogList')->with(['success'=>'Blog Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::findorFail($id);
        $blog->delete();
        return redirect('/blogList')->with(['success'=>'Blog Successfully Deleted']);
    }
}
