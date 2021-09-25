<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $data_login = [
            'username' => $request['username'],
            'password' => $request['password'],
        ];
    
        // // Dump data
        // dd($credentials);
        
        $result = Auth::attempt($data_login);
        
        if ($result == false) {
            return response()->json([
                'status' => '200',
                'message' => 'Đăng Nhập Không thanh công',
            ]);
        }else{
            $user = Auth::user();
            return redirect()->route('frontend.index');
        }
        
      
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('frontend.index');

    }
}
