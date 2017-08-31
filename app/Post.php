<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Criar arquivo em massa utilizando por exemplo tinker;
    //Exemplo : App\Post::create(['title'=>'Terceiro Post','content'=>'Conteudo do terceiro post'])
    protected $fillable=[
        'title',
        'content'
    ];

    /*Um posts pode ter vários comentarios*/
    /*Pode ser obervado no tinker*/
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


    public function tags()
    {
        return $this->belongsToMany('App\Tag','posts_tags');
    }


}
