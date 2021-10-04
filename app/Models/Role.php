<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{ use HasFactory;
    use Notifiable, SoftDeletes;
    protected $fillable = [
       'name'   
    ];

    public function role_users(){
        return $this->hasMany(Role_user::class, 'user_id' , 'id');
    }
    public function permission_roles(){
        return $this->hasMany(Permission_role::class, 'role_id' , 'id');
    }
    public function user(){
        return $this->belongsToMany(User::class , 'role_users', 'user_id', 'role_id');
    }
    public function permission(){
        return $this->belongsToMany(Permission::class,'permission_roles');
    }
}
