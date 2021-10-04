<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory;
    use Notifiable, SoftDeletes;
    protected $fillable = [
       'name '   
    ];

    public function permission_roles(){
        return $this->hasMany(Permission_role::class, 'permission_id' , 'id');
    }
    public function manyRole(){
        return $this->belongsToMany(Role::class,'permission_roles');
    }
}
