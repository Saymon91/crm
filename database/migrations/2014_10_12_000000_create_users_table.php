<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->string('username', 25);
            $table->string('email');
            $table->unsignedBigInteger('phone');
            $table->string('password', 100);
            $table->dateTime('last_visit');
            $table->rememberToken();
            $table->timestamps();
            $table->unique(['username'], 'username');
            $table->unique(['email'], 'email');
            $table->unique(['phone'], 'phone');
        });
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
}
