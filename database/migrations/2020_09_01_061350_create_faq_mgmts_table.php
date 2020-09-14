<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqMgmtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_mgmts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('short_description')->nullable();
            $table->string('description');
            $table->string('status');
            $table->bigInteger('faq_cat_id')->unsigned();
            $table->timestamps();
            $table->foreign('faq_cat_id')->references('id')->on('faq_cat_mgmts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_mgmts');
    }
}
