<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //
    function index(){
        return view('pages.index');
    }
    function about(){
        //$post = Posts::all();
        //$post = DB::table('posts')->orderBy('created_at','desc')->get();
        $post = DB::table('posts')->orderBy('created_at','desc')->get();
        return view('pages.about')->with('post',$post);
    }
    function login(){
        return view('pages.login');
    }
    function signup(){
        return view('pages.signup');
    }
    function contact(){
        return view('pages.contact');
    }
    public function edit(Posts $posts)
    {
        //
        dd($posts);
        //return view("posts.edit",["posts"=>$posts]);
        return "OK";  
    }

}
