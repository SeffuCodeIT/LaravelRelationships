<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;


    public function getUserRelation()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function getCommentsRelation()
    {
        return $this->hasMany('App\Models\Comments', 'post_id', 'id');
    }
}
