<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConterpartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conterparties', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('field');
            $table->string('type');
            $table->text('value');
            $table->timestamps();
            $table->primary(['id', 'field']);
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conterparties');
    }
}
