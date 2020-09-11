<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->text('image');
            $table->longText('short_description');
            $table->longText('description');
            $table->string('status');
            $table->bigInteger('technique_id')->unsigned();
            $table->bigInteger('writer_id')->unsigned();
            $table->timestamps();
            $table->foreign('technique_id')->references('id')->on('techniques')->onDelete('cascade');
            $table->foreign('writer_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
