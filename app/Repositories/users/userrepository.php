<?php

namespace App\Repositories\users;

use App\Models\User;
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

    if (empty($data['avatar']) == false) {
      $image = request()->file('avatar');
      $image_name = $image->getClientOriginalName();
      request()->file('avatar')->move(public_path('image/product'), $image_name);
      $data['avatar'] = $image_name;
    } else {
      $data['avatar'] = "nen_thom_01.jpg";
    }

    return  User::Create($data);


  }
  
  public function edit($id)
  {
    return User::find($id);
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
    return  $user->update($data);
  }
  public function delete($request)
  {
    User::find($request['id'])->delete();
  }
}
