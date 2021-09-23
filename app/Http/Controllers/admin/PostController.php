<?php

namespace App\Http\Controllers\admin;

use App\Models\Comment;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\storePost;
use App\Http\Requests\Post\updatePost;
use App\Repositories\post\PostRepository;

class PostController extends Controller
{
    public $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }



    public function index()
    {
        $posts = Posts::with("userRelation")->get()
            ->map(function($post){ 
                $post->author_name = !is_null($post->userRelation) ? $post->userRelation->username : 'Chưa có người dùng';  
                return $post;
            });

        // $data = $data->load("userRelation");
        $users = DB::table('users')->select('id', 'username')->get();
        //    $data =  $this->postRepository->index();

        return view('admin/post/index', compact('posts','users'));
    }
    public function store(storePost $request)
    {
        $this->postRepository->store($request);
        return response()->json([
            'status' => '200',
            'message' => 'Thêm mới thành công',
        ]);
    }


    public function show($id)
    {
        $data = $this->postRepository->edit($id);
        $comments = Comment::where('post_id',$id)->with('userRelation')->get();
        // $comments =$comments->load('userRelation');
        return view('admin/post/show', ['data' => $data,'comments'=>$comments]);
    }


    public function edit($id)
    {
        $data = $this->postRepository->edit($id);
        return response()->json([
            'data' => $data,
        ]);
    }

    public function update($id, updatePost $request)
    {
        $post = $this->postRepository->edit($id);
        if (empty($post) == false) {
            $this->postRepository->update($post, $request);
            return response()->json([
                'status' => '200',
                'message' => 'Chỉnh sửa thành công',
            ]);
        } else {
            return response()->json([
                'status' => '200',
                'message' => 'Chỉnh sửa Thất bại',
            ]);
        }
    }
    public function delete()
    {
        $id = request()->id;
        Posts::find($id)->delete();
        return response()->json([

            'status' => '100',
            'message' => 'Xóa thành công',
        ]);
    }
}
