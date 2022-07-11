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
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 60);
            $table->tinyInteger('role');
            $table->string('remember_token', 100)->nullable();
        });

        DB::table('users')->insert(
            [
                'name' => 'Huyền',
                'email' => 'huyenltn@gmail.com',
                'password' => bcrypt('123456'),
                'role' => '1'
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'Bình Lê',
                'email' => 'binh@gmail.com',
                'password' => bcrypt('123456'),
                'role' => '2'
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'Lê Văn An',
                'email' => 'an@gmail.com',
                'password' => bcrypt('123456'),
                'role' => '0'
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
        Schema::dropIfExists('users');
    }
};
