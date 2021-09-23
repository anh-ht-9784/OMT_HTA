<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Posts extends Model
{
    use HasFactory;
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'access',
        'release_date',
        'image',
        'userid_create',
        
    ];

    public function userRelation(){
        return $this->belongsTo(User::class, 'userid_create' , 'id');
    }

    public function commentRelation(){
        return $this->hasMany(Comment::class, 'post_id','id');
    }
}
