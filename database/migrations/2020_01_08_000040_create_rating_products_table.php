<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingProductsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'rating_products';

    /**
     * Run the migrations.
     * @table rating_products
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('products_id');
            $table->unsignedBigInteger('users_id');
            $table->unsignedTinyInteger('rating')->default('0');
            $table->string('opinion')->nullable();
            $table->timestamps();
            $table->index(["users_id"], 'fk_producto_reputacion_usuario1_idx');

            $table->index(["products_id"], 'fk_producto_reputacion_producto1_idx');
            
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
