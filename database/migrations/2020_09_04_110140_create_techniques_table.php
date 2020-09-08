<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techniques', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('image')->nullable();
            $table->longText('short_description');
            $table->longText('description');
            $table->longText('faqs')->nullable();
            $table->bigInteger('parent_cat_id')->unsigned();
            $table->bigInteger('child_cat_id')->unsigned();
            $table->timestamps();
            $table->foreign('parent_cat_id')->references('id')->on('parent_categories')->onDelete('cascade');
            $table->foreign('child_cat_id')->references('id')->on('child_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('techniques');
    }
}
