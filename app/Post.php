<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = [
        'title', 'description'
    ];

    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
