<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
         
            $table->increments('news_id');
            $table->string('news_title',255);
            $table->string('news_slug',255);
            $table->text('news_desc');
            $table->text('news_content');
            $table->string('news_meta_desc',255);
            $table->string('news_image',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
