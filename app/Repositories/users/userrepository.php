<?php

namespace App\Repositories\users;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Repositories\users\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
  // protected $user;
  // public function __construct(User $user){

  //    $this->User = $user;
  // }

  public function index()
  {
    return User::all();

  }


  public function store(array $data)
  {
   
    $datas = request()->except("role");
    if (empty($data['avatar']) == false) {
      $image = request()->file('avatar');
      $image_name = $image->getClientOriginalName();
      request()->file('avatar')->move(public_path('image/product'), $image_name);
      $datas['avatar'] = $image_name;
    } else {
      $datas['avatar'] = "nen_thom_01.jpg";
    }
    $storeUser = User::Create($datas);
       $sss = User::find($storeUser->id);
       if(isset($data['role'])){
        $data['role'] = "3";
      };
       $sss->Roles()->attach(explode(',', $data['role'], 2));
  }
  
  public function edit($id)
  {
    return  User::find($id);
  }
  public function update($user, $data)
  { 
   
    if (empty($data['avatar']) == false) {
      $image = request()->file('avatar');
      $image_name = $image->getClientOriginalName();
      request()->file('avatar')->move(public_path('image/product'), $image_name);
      $data['avatar'] = $image_name;
    } else {
      $data['avatar'] = $data['avatar_old'];
    }

     $user->update($data);
     $user->Roles()->sync(explode(',', $data['role'], 2));
  }
  public function delete($request)
  {
    User::find($request['id'])->delete();
    DB::table('role_users')->where('user_id', $request['id'])->delete();
  }
}
