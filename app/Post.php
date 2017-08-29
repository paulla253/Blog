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
}
