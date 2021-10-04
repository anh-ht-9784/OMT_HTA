<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AccountRepository
{
    public function login($request)
    {
        $data_login = [
            'username' => $request['username'],
            'password' => $request['password'],
        ];
        $result = Auth::attempt($data_login);
        if ($result == true) {
            $user = Auth::user();
            return redirect()->route('frontend.index');
           
        } else {
            return response()->json([
                'status' => '200',
                'message' => 'Tài Khoản hoặc mật khẩu sai',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('frontend.index');
    }

    public function register(){
        $data = request()->except("_token");
        
        if (empty($data['avatar']) == false) {
            $image = request()->file('avatar');
            $image_name = $image->getClientOriginalName();

            request()->file('avatar')->move(public_path('image/product'), $image_name);
            $data['avatar'] = $image_name;
          } else {
            $data['avatar'] = "nen_thom_01.jpg";
          }
             $storeUser = User::Create($data);
             $sss = User::find($storeUser->id);
             $sss->Roles()->attach("3");
             return response()->json([
                'status' => '200',
                'message' => 'Tạo tài Khoản Thành công.',
            ]);
    }

    public function editAccount(){    
      return   User::find(Auth::id());
    }

    public function uploadAccount(){
        $data = request()->except("_token");
        $user = User::find($data['id_user']);
        $user->update($data);
        return redirect()->route('frontend.index');
    }
}
