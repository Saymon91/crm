<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->ipAddress('client_ip');
            $table->macAddress('client_mac')->nullable();
            $table->string('client_agent', 100)->nullable();
            $table->ipAddress('server_ip')->nullable();
            $table->string('method', 10);
            $table->text('url');
            $table->dateTime('request_time');
            $table->dateTime('response_time');
            $table->binary('response_content')->nullable();
            $table->unsignedSmallInteger('response_status')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
