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
            $table->longText('short_description');
            $table->longText('description');
            $table->boolean('status')->default(0);
            $table->bigInteger('faq_cat_id')->unsigned();
            $table->timestamps();
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
