<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Notifiable, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'avatar',
        'username',
        'email',
        'password',
        'address',
        'gender',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function postRelation(){
        return $this->hasMany(Posts::class, 'userid_create' , 'id');
    }
    public function commentsRelation(){
        return $this->belongsTo(Comment::class, 'user_id' , 'id');
    }
    // public function setPasswordAttribute($value){
    //     // tên function bắt buộc phai đặt đung
    //     $hased =bcrypt($value) ;
    //    return $value = $this->attributes['password'] = $hased ;
          
    // }
}
