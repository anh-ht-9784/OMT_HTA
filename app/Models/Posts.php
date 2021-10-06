<?php

namespace App\Models;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    use HasFactory;
    use Notifiable, SoftDeletes;
    use Sluggable;

    protected $fillable = [
        'title',
        'content',
        'access',
        'release_date',
        'image',
        'userid_create',
        'views',
        'slug',
        
    ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function incrementReadCount() {
        
        $this->views++;
        return $this->save();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function author(){
        return $this->belongsTo(User::class, 'userid_create' , 'id');
    }

    public function comment(){
        return $this->hasMany(Comment::class, 'post_id','id');
    }
}
