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
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('feedback_id');
            $table->string('feedback_name', 100);
            $table->string('feedback_email', 100);
            $table->string('feedback_content', 1000);
            $table->timestamp('feedback_date')->useCurrent();
            $table->integer('customer_id')->unsigned()->nullable();
            $table->foreign('customer_id')
                ->references('customer_id')->on('customers');
        });
        DB::table('feedbacks')->insert(
            [
                'feedback_name' => 'An',
                'feedback_email' => 'An@gmail.com',
                'feedback_content' => 'Shop rất nhiệt tình, giao hàng nhanh'
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
        Schema::dropIfExists('feedbacks');
    }
};
