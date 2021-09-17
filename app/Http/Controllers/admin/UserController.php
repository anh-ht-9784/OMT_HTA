<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {   
            $list = User::all();
  
        return view('admin/users/index', ['data' => $list]);
    }
    public function store(Request $request )
    {
        $data = request()->except("_token");
        
        if (empty($data['avatar']) == false) {
            $image = request()->file('avatar');
            $image_name = $image->getClientOriginalName();
            request()->file('avatar')->move(public_path('image/product'), $image_name);
            $data['avatar'] = $image_name;
        } else {
            $data['avatar'] ="nen_thom_01.jpg";
        }
       
      
            $result = User::Create($data);

            return response()->json([
                'status' => '200',
                'message' =>'ok',
    
            ]);
    }
    public function edit($id )
    {
        $data = User::find($id);
        return response()->json([
            'data' => $data,
        ]);
    }


    public function update($id)
    { 
 
        $user = User::find($id);
        $data = request()->except("_token");

        if (empty($data['avatar']) == false) {
            $image = request()->file('avatar');
            $image_name = $image->getClientOriginalName();
            request()->file('avatar')->move(public_path('image/product'), $image_name);
            $data['avatar'] = $image_name;
        } else {
            $data['avatar'] =$data['avatar_old'];
        }
        $user->update($data);
        return response()->json([
            'status' => '200',
            'message' =>'ok',

        ]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete($id);
        return redirect()->route('admin.users.index');
    }
}
