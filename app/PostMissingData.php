<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostMissingData extends Model
{
    protected $fillable = ['user_id', 'title', 'description',];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
