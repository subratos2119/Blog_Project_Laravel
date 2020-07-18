<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;
use Illuminate\Http\Request;
use Image;


class PostController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts = post::all();
        return view('admin.post.show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tags =tag::all();
        $categories = category::all();

        return view('admin.post.post',compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required|image',

        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time().'.'.$image->getClientOriginalExtension();
            $location = public_path().'/user/img/'.$fileName;
            Image::make($image)->save($location);
        }else{
           $fileName = null;
        }

            $post = new post;
            $post->image    = $fileName;
            $post->title    = $request->title;
            $post->subtitle = $request->subtitle;
            $post->slug     = $request->slug;
            $post->body     = $request->body;
            $post->status   = $request->status;
            $post->save();
            $post->tags()->sync($request->tags);
            $post->categories()->sync($request->categories);
            

            return redirect(route('post.index'))->with('messege', 'Post Successfully');


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
        $posts = post::with('tags','categories')->find($id);

        $tags =tag::all();
        $categories = category::all();

        return view('admin.post.edit',compact('tags','categories','posts'));
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
        $this->validate($request,[

            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required|image',

        ]);
  
        $post = post::find($id);


        if ($request->hasFile('image')) {
            @unlink('public/user/img/'.$post->image);
            $image = $request->file('image');
            $fileName = time().'.'.$image->getClientOriginalExtension();
            $location = public_path().'/user/img/'.$fileName;
            Image::make($image)->save($location);
        }else{
           $fileName = null;
        }

            
            $post->image    =  $fileName; 
            $post->title    = $request->title;
            $post->subtitle = $request->subtitle;
            $post->slug     = $request->slug;
            $post->body     = $request->body;
            $post->status   = $request->status;
            $post->tags()->sync($request->tags);
            $post->categories()->sync($request->categories);
            $post->update();

            return redirect(route('post.index'))->with('messege', 'Post Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = post::find($id);
        unlink(public_path().'/user/img/'.$posts->image);
    
        $posts->delete();

        return back()->with('messege', 'Post Delete Successfully');;
    }
}
