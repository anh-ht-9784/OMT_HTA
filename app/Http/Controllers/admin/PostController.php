<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Posts;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
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
        if ( Gate::denies('show_post')) {
            abort(403);
             }
        $posts = Posts::with('author')->get()
            ->map(function($post){ 
                $post->author_name = !is_null($post->author) ? $post->author->username : 'Ẩn danh!';  
                return $post;
            });

        // $data = $data->load("userRelation");
        $users =User::select('id', 'username')->get();
        //    $data =  $this->postRepository->index();

        return view('admin/post/index', compact('posts','users'));
    }
    public function store(storePost $request)
    {   
        if ( Gate::denies('create_post')) {
            abort(403);
        }
        $this->postRepository->store($request);
        return response()->json([
            'status' => '200',
            'message' => 'Thêm mới thành công',
        ]);
    }


    public function show($id)
    {
        if (Gate::denies('show_post')) {
            abort(403);
             }
        $news = $this->postRepository->edit($id);
        $comments = Comment::where('post_id',$id)->with('post')->get();
       
        return view('admin/post/show', compact('news','comments'));
    }


    public function edit($id)
    {   
        if ( Gate::denies('show_post')) {
            abort(403);
        }
        $editPost = $this->postRepository->edit($id);
        return response()->json(compact('editPost'));
    }

    public function update( updatePost $request)
    {
        if (Gate::denies('edit_post')) {
            abort(403);
        }
        $post = $this->postRepository->edit($request['id']);
            $this->postRepository->update($post, $request);
            return response()->json([
                'status' => '200',
                'message' => 'Chỉnh sửa thành công',
            ]);
    }
    public function delete()
    {
        if (Gate::denies('delete_post')) {
            abort(403);
        }
        $id = request()->id;
        Posts::find($id)->delete();
        Comment::where('post_id',$id)->delete();
        return response()->json([
            'status' => '100',
            'message' => 'Xóa thành công',
        ]);
    }
}
