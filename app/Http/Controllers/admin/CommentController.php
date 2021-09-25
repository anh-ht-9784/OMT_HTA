<?php

namespace App\Http\Controllers\admin;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        $listComnent =  Comment::with('post', 'authors')->get();
        return view('admin/comment/index', compact('listComnent'));
    }
    public function store(Request $request)
    {
        $request['user_id'] = Auth::id();
        $request = request()->except('_token');
        Comment::Create($request);
        return response()->json([
            'status' => '100',
            'message' => 'Thêm mới thành công',
        ]);
        
    }
    public function delete(request $request)
    {
        Comment::find($request['id'])->delete();
    }
}
