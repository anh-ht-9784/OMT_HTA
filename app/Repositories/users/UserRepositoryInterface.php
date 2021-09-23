<?php
namespace App\Repositories\users;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
interface UserRepositoryInterface
{
   
    
    public function index(); 
    public function store(array $data);
    public function edit($id);
    public function update($user,array $data);
    public function delete($id);

}


