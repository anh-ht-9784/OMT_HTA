<?php

namespace App\Http\Controllers\home;

use App\Models\Posts;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index(){
       $HomeList =Posts::where('release_date','<=',now())->orderBy('views', 'DESC')->take(4)->get();
        $news = Posts::where('release_date','<=',now() )->with('comment')->orderBy('release_date', 'DESC')->paginate(5);
        return view('frontend/index',compact('HomeList','news'));
    }
    public function show($slug)
    {
      $news = Posts::where('slug',$slug)->first();
        $comments = Comment::where('post_id',$news->id)->with('authors')->get();
        if(empty(Cookie::get($news->id))){
          Cookie::queue($news->id, '1', 2);
          $news->incrementReadCount();
        }  
        return view('frontend/news', compact('news','comments'));
    }
}
   