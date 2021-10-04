<?php

namespace App\Http\Controllers\home;

use App\Models\Posts;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
       $HomeList = Posts::all()->take(4);
       $news = Posts::where('release_date','<=',now() )->get();

        return view('frontend/index',compact('HomeList','news'));
    }
    public function show($id)
    {
    
        $news = Posts::find($id);
      
        $comments = Comment::where('post_id',$id)->with('post')->get();
       
        return view('frontend/news', compact('news','comments'));
    }
}
