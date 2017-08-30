<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     *Criará o esquema do banco
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * deletará o esquema do banco.
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
