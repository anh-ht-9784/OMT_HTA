<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUser;
use App\Http\Requests\User\UpdateUser;
use App\Repositories\users\userrepository;

class UserController extends Controller 
{
    public $userrepository;

    public function __construct(userrepository $userrepository)
    {
        $this->userrepository = $userrepository;
    }


    public function index()
    {
        $userlist = $this->userrepository->index();
        return view('admin/users/index', compact('userlist'));
    }


    public function store(StoreUser $request)
    {
        $data = request()->except("_token");
        $result = $this->userrepository->store($data);
        return response()->json([
            'status' => '200',
            'message' => 'Thêm mới thành công',
        ]);
    }
    public function edit($id)
    {
        $editUser = $this->userrepository->edit($id);
        return response()->json(
            compact('editUser')
        );
    }


    public function update( UpdateUser $request)
    {
            $user = $this->userrepository->edit($request['id']);
            $data = request()->except("_token",'id');
            $this->userrepository->update($user, $data);
            return response()->json([
                'status' => '200',
                'message' => 'Cập nhật thành công',
            ]);
        
    }

    public function delete(Request $request)
    {
        $this->userrepository->delete($request);
       return response()->json([
        'status' => '100',
        'message' => 'Xóa thành công',
       ]);
    }
}
