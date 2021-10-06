<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\User\StoreUser;
use Illuminate\Support\Facades\Cache;
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

        if (Gate::denies('show_user')) {
            abort(403);
        }
        $userlist = $this->userrepository->index();
        return view('admin/users/index', compact('userlist'));
    }


    public function store(StoreUser $request)
    {
        if (Gate::denies('create_user')) {
            abort(403);
        }
        $data = request()->except("_token");
        $result = $this->userrepository->store($data);

        return response()->json([
            'status' => '200',
            'message' => 'Thêm mới thành công',
        ]);
    }
    public function edit($id)
    {
        if (Gate::denies('show_user')) {
            abort(403);
        }
        $getUser = $this->userrepository->edit($id);
        $getRole = DB::table('role_users')->select('role_id')->where('user_id', $id)->get();
        return response()->json(
            compact('getUser', 'getRole')
        );
    }


    public function update(UpdateUser $request)
    {
        if (Gate::denies('edit_user')) {
            abort(403);
        }
        $user = $this->userrepository->edit($request['id']);
        $data = request()->except("_token", 'id');
        $this->userrepository->update($user, $data);
        return response()->json([
            'status' => '200',
            'message' => 'Cập nhật thành công',
        ]);
    }

    public function delete(Request $request)
    {
        if (Gate::denies('delete_user')) {
            abort(403);
        }
        $this->userrepository->delete($request);
        return response()->json([
            'status' => '100',
            'message' => 'Xóa thành công',
        ]);
    }
}
