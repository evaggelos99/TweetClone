<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaggablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            //$table->foreign('post_id')->references('id')->on('posts')->onUpdate('cascade')->onDelete('cascade');
            //$table->integer('post_id')->unsigned()->index();

            //$table->foreign('tag_id')->references('id')->on('tags')->onUpdate('cascade')->onDelete('cascade');
            //$table->integer('tag_id')->unsigned()->index();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('tag_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}