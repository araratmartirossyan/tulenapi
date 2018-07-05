<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model

{
    protected $fillable = [
        'logo',
        'image',
        'title',
        'description',
        'text',
        'category_id',
        'like_count',
        'views_count'
    ];

    public function likes() {
    	return $this -> hasMany('App\Like');
    }
}