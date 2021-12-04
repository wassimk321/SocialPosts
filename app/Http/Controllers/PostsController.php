<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $post = DB::table('posts')->orderBy('created_at','desc')->paginate(1);
        return view('pages.about')->with('post',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request , [
            'subject'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'body'=>'required',
            'postimage'=>'image|nullable|max:1024',
        ]);

        if($request->hasFile('postimage')){
            $filename = $request->file('postimage')->getClientOriginalName();
            $fileN = pathinfo($filename,PATHINFO_FILENAME);
            $extension = $request->file('postimage')->getClientOriginalExtension();
            $filenameStore = $fileN.'_'.time().'.'.$extension;
            $path = $request->file('postimage')->storeAs('public/post_image',$filenameStore);
        }
        else{
            $filenameStore='noImage.jpg';
        }
        $post = new Posts;
        $post->subject = $request->input('subject');
        $post->firstname = $request->input('firstname');
        $post->lastname = $request->input('lastname');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->postimage = $filenameStore;
        $post->save();
        return redirect('about')->with('success','Done Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $posts = Posts::find($id);
        if(auth()->user()->id != $posts->user_id){
            return redirect('/about');
        }
        return view("posts.edit",["posts"=>$posts]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if($request->hasFile('postimage')){
            $filename = $request->file('postimage')->getClientOriginalName();
            $fileN = pathinfo($filename,PATHINFO_FILENAME);
            $extension = $request->file('postimage')->getClientOriginalExtension();
            $filenameStore = $fileN.'_'.time().'.'.$extension;
            $path = $request->file('postimage')->storeAs('public/post_image',$filenameStore);
        }
        $post =  Posts::find($id);
        $post->subject = $request->input('subject');
        $post->firstname = $request->input('firstname');
        $post->lastname = $request->input('lastname');
        $post->body = $request->input('body');
        if($request->hasFile('postimage')){
            $post->postimage = $filenameStore;
        }
        
        $post->save();
        return redirect('about')->with('success','Done Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $post = Posts::find($id);
        $post->delete();
        return redirect('about')->with('success','Done Successfully');

    }
}
