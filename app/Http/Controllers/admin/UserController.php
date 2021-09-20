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
        $list = $this->userrepository->index();
        return view('admin/users/index', ['data' => $list]);
    }


    public function store(StoreUser $request)
    {    
        $data = request()->except("_token");
        $result = $this->userrepository->store($data);
        return response()->json([
            'status' => '200',
            'message' => 'ok',
        ]);
    }
    public function edit($id)
    {
        $data = $this->userrepository->edit($id);
        return response()->json([
            'data' => $data,
        ]);
    }


    public function update($id, UpdateUser $request)
    {
        $data = request()->except("_token");
        $this->userrepository->update($id,$data);
        return response()->json([
            'status' => '200',
            'message' => 'ok',
        ]);
    }

    public function delete($id)
    {
        $this->userrepository->delete($id);
        return redirect()->route('admin.users.index');
    }
}
