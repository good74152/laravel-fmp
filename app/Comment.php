<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'post_id', 'comment',];

    public function post_missing_data()
    {
        return $this->belongsTo('App\PostMissingData');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
