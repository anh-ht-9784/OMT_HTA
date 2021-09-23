<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index(){
    $data =  Comment::all();
     return view('admin/comment/index', ['data' => $data]);
    }
    public function store(){
        
    }
    public function delete(){
        
    }
}
