<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Joke extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'body',
        'author',
        'category',
        'likes'
    ];
}
