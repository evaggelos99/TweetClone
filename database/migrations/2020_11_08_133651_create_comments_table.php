<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("user_id")->nullable();
            $table->unsignedBigInteger("post_id")->nullable();
            $table->string("context");
            $table->integer("likes");
            $table->timestamps();
            $table->softDeletes();
            $table->foreign("user_id")->references('id')
                -> on('users')->onDelete('set null');

            $table->foreign("post_id")->references('id')
                -> on('posts')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
