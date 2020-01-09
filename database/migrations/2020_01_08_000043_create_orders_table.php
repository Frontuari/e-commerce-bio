<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'orders';

    /**
     * Run the migrations.
     * @table orders
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('sub_total', 20, 6);
            $table->decimal('total_pay', 20, 6);
            $table->decimal('total_tax', 20, 6);
            $table->decimal('total_packaging', 20, 6)->nullable()->default('0');
            $table->decimal('total_transport', 20, 6)->nullable()->default('0');
            $table->unsignedBigInteger('order_address_id');
            $table->enum('status', ['A', 'I'])->nullable()->default('A');
            $table->unsignedBigInteger('transports_id');
            $table->text('order_address')->nullable();
            $table->unsignedBigInteger('cities_id');
            $table->unsignedTinyInteger('user_rating')->nullable()->default('0');
            $table->string('opinion')->nullable();
            $table->dateTime('delivery_time_date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->decimal('deduction', 20, 6)->nullable()->default('0')->comment('para los combos');
            $table->unsignedBigInteger('packagings_id');
            $table->unsignedBigInteger('currencies_id');
            $table->decimal('currency_rate', 20, 6)->nullable()->default('1');
            $table->timestamps();
            $table->index(["order_address_id"], 'fk_pedido_direccion_pedido1_idx');

            $table->index(["currencies_id"], 'fk_order_moneda1_idx');

            $table->index(["packagings_id"], 'fk_pedido_embalaje1_idx');

            $table->index(["transports_id"], 'fk_pedido_transporte1_idx');

            $table->index(["cities_id"], 'fk_pedido_parroquia1_idx');

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
