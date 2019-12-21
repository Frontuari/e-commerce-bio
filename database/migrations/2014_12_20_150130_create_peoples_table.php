<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rif')->nullable(false);
            $table->string('name',80)->nullable(false);
            $table->enum('sex',['F','M'])->nullable(false);
            $table->date('birthdate')->nullable(false);
            $table->bigInteger('city_id')->unsigned();
            $table->text('address')->nullable(false);
            $table->string('phone',25)->nullable();
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peoples');
    }
}
