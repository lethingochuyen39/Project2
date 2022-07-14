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
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('promotion_id');
            $table->string('promotion_name', 255);
            $table->tinyInteger('promotion_type');
            $table->timestamp('promotion_time_start')->useCurrent();
            $table->timestamp('promotion_time_end');
            $table->integer('promotion_value')->unsigned();

            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')
                ->references('id')->on('products');

            $table->integer('product_type_id')->unsigned()->nullable();
            $table->foreign('product_type_id')
                ->references('id')->on('product_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
};
