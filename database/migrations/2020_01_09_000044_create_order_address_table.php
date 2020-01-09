<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderAddressTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'order_address';

    /**
     * Run the migrations.
     * @table order_address
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('cities_id');
            $table->text('address');
            $table->enum('status', ['A', 'I'])->default('A');
            $table->timestamps();
            $table->index(["cities_id"], 'fk_direccion_pedido_parroquia1_idx');

            $table->index(["users_id"], 'fk_direccion_pedido_usuario1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
