<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('EAN');
            $table->bigInteger('brands_id');
            $table->string('description');
            $table->string('description_short');
            $table->float('discount',20,6);
            $table->string('keyword');
            $table->string('name');
            $table->float('price',20,6);
            $table->bigInteger('product_subcategories_id');
            $table->integer('promote');
            $table->integer('qty_max');
            $table->integer('qty_min');
            $table->integer('qty_avaliable');
            $table->integer('qty_sold');
            $table->integer('qty_view');
            $table->integer('record');
            $table->enum('status',['A','I'])->default('A');
            $table->bigInteger('stores_id');
            $table->string('photo');
            $table->timestamps();
        });
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
}
