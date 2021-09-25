<?php

namespace App\Repositories\post;

use App\Models\Posts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Post\storePost;
use App\Repositories\users\UserRepositoryInterface;

class PostRepository 
{
  // protected $user;
  // public function __construct(User $user){

  //    $this->User = $user;
  // }

  public function index()
  {
    $data = Posts::all();
    $data->load('author');
    $users = DB::table('users')->select('id', 'username')->get();

     return[$data,$users];
  }


  public function store( $request)
  {

    $request = request()->all();
    if (empty($request['image']) == false) {
        $image = request()->file('image');
        $image_name = $image->getClientOriginalName();
        request()->file('image')->move(public_path('image/product'), $image_name);
        $request['image'] = $image_name;
    } else {
        $request['image'] = "nen_thom_01.jpg";
    }
    $request['access'] = "0";
    $request['userid_create'] = Auth::id();

   return Posts::Create($request);


  }
  
  public function edit($id)
  {
    return Posts::find($id); 
  }

  public function update($post, $request)
  {
    $request = request()->all();
    if (empty($request['image']) == false) {
        $image = request()->file('image');
        $image_name = $image->getClientOriginalName();
        request()->file('image')->move(public_path('image/product'), $image_name);
        $request['image'] = $image_name;
    } else {
        $request['image'] = "nen_thom_01.jpg";
    }
    // $data['image'] = "nen_thom_01.jpg";
    $request['access'] = "0";
   return $post->update($request);
  }
  public function delete($id)
  {
   
  }
}
