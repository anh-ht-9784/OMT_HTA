<?php

namespace App\Http\Controllers\admin;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    public function index()
    {
        if (Gate::denies('show_comment')) {
            abort(403);
        }
        $listComnent =  Comment::with('post', 'authors')->get();
        return view('admin/comment/index', compact('listComnent'));
    }
    public function store(Request $request)
    {
        if (Gate::denies('create_comment')) {
            abort(403);
        }
        $request['user_id'] = Auth::id();
        $request = request()->except('_token');
        $newComment = Comment::Create($request);
        return response()->json([
            'status' => '100',
            'message' => 'Thêm mới thành công',
            'newComment'=>$newComment
        ]);
    }
    public function delete(request $request)
    {
       $delete = Comment::find($request['id'])->delete();
        return response()->json([
            'status' => '100',
            'message' => 'Thêm mới thành công',
            'id'=>$request['id']
        ]);
    }
}
