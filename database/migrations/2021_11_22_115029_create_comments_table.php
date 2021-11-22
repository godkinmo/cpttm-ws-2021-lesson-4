<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('post_id');

            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

            $table->longText('content');

            $table->timestamps();
        });
    }
}
