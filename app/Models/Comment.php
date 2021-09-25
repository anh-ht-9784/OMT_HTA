<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    use Notifiable, SoftDeletes;
    protected $fillable = [
       
        'content',
        'user_id',
        'post_id'
        
    ];

    public function authors(){
        return $this->belongsTo(User::class, 'user_id' , 'id');
    }
    public function post(){
        return $this->belongsTo(Posts::class, 'post_id' , 'id');
    }
}
