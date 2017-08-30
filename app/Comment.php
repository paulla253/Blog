<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[

        'post_id',
        'coment',
        'name',
        'email',
    ];

    //Esse comentario pertence a um post
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
