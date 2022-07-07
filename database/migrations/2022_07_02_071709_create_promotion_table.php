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
        Schema::create('promotion', function (Blueprint $table) {
            $table->increments('promotion_id');
            $table->string('promotion_name', 255);
            $table->boolean('promotion_type');
            $table->boolean('infinite_promotion');
            $table->timestamp('promotion_start_time')->useCurrent();
            $table->timestamp('promotion_end_time')->nullable();
            $table->integer('promotion_value')->unsigned()->nullable();
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('product_id')->on('products');

            $table->integer('product_type_id')->unsigned()->nullable();
            $table->foreign('product_type_id')
                ->references('product_type_id')->on('product_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotion');
    }
};
