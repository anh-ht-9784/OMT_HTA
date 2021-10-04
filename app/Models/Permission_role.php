<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission_role extends Model
{
    use HasFactory;
    use Notifiable, SoftDeletes;
    protected $fillable = [
       'permission_id ',
       'role_id'   
    ];
    public function roles(){
        return $this->belongsTo(Role::class, 'role_id' , 'id');
    }
    public function permissions(){
        return $this->belongsTo(Permission::class, 'permission_id' , 'id');
    }
}
