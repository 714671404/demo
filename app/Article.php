<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'id',
        'title',
        'content',
        'user_id'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
