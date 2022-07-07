<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('product_type', function (Blueprint $table) {
            $table->increments('product_type_id');
            $table->string('product_type_name', 100);
        });
        DB::table('product_type')->insert(
            [
                'product_type_name' => 'giày cỏ nhân tạo'
            ]
        );
        DB::table('product_type')->insert(
            [
                'product_type_name' => 'giày cỏ tự nhiên'
            ]
        );
        DB::table('product_type')->insert(
            [
                'product_type_name' => 'giày futsal'
            ]
        );
        DB::table('product_type')->insert(
            [
                'product_type_name' => 'phụ kiện'
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_type');
    }
};
