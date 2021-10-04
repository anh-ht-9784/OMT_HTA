<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role_user extends Model
{
    use HasFactory;
    use Notifiable, SoftDeletes;
    protected $fillable = [
       'user_id ',
       'role_id'   
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id' , 'id');
    }
    public function roles(){
        return $this->belongsTo(Role::class, 'role_id' , 'id');
    }
}
