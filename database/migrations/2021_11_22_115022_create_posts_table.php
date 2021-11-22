<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->longText('content')->nullable();

            $table->timestamps();
        });
    }
}
