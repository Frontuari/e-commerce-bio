<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumndOrderAddres extends Migration
{
    public $tableName = 'order_address';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->tableName, function (Blueprint $table) {
            $table->string('zip_code', 20)->nullable();
            $table->string('urb', 150)->nullable();
            $table->string('sector', 100)->nullable();
            $table->string('nro_home', 10)->nullable();
            $table->text('reference_point')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
