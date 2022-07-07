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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name', 170);
            $table->float('product_price');
            $table->boolean('product_highlight')->default(0);
            $table->timestamp('product_date')->useCurrent();
            $table->string('product_description', 1000)->nullable();
            $table->string('product_image', 255)->nullable();
            $table->integer('product_type_id')->unsigned();
            $table->foreign('product_type_id')
                ->references('product_type_id')->on('product_type');
                // ->onDelete('cascade');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')
                ->references('brand_id')->on('brands');
                // ->onDelete('cascade');
            // $table->integer('product_type_id')->unsigned()->foreign('product_type_id')->references('product_type_id')->on('product_type');


            // $table->integer('brand_id')->unsigned()->foreign('brand_id')->references('brand_id')->on('brands');
        });

        DB::table('products')->insert(
            [

                'product_name' => 'MIZUNO MORELIA ULTRA LIGHT MADE IN JAPAN FG - GOLD/WHITE',
                'product_price' => '5500',
                'product_highlight' => '1',
                'product_description' => 'Vào tháng 3 năm 2021, thương hiệu Nhật Bản đình đám Mizuno cho ra mắt một dòng giày đá bóng siêu nhẹ không hề kém cạnh Mercurial của Nike, X Ghosted của adidas hay Ultra của Puma. Sự ra mắt của Mizuno Morelia Ultra Light MIJ chính xác là một sự chứng minh Mizuno không hề kém cạnh cuộc trong cuộc đua tốc độ này.',
                'product_type_id' => '2',
                'brand_id' => '1'
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
        Schema::dropIfExists('products');
    }
};
