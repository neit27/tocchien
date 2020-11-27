<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        
    ];
    public function categories()
    {
    	return $this->belongsTo('App\Category');
    }
    public function users()
    {
    	return $this->belongsTo('App\User');
    }
    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }
}
