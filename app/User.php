<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function publish($post){
        $this->posts()->save($post);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function addComment($comment, $post){
        Comment::create([
            'body' => $comment,
            'post_id' => $post->id,
            'user_id' => $this->id
        ]);
    }
}
