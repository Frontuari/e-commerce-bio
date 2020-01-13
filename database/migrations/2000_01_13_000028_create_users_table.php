<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('last_ip', 18)->nullable();
            $table->dateTime('last_activity')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('password', 255);
            $table->integer('cant_orders')->nullable()->default('0');
            $table->unsignedInteger('peoples_id')->nullable();
            $table->unsignedInteger('coins_id')->nullable();
            $table->unsignedInteger('groups_id')->nullable();
            $table->string('name', 200)->nullable();
            $table->string('email', 200);
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('failed_attempts')->nullable()->default('0');
            $table->unsignedInteger('purchase_quantity')->nullable()->default('0');
			$table->rememberToken();
            $table->index(["coins_id"], 'fk_users_coins1_idx');

            $table->index(["peoples_id"], 'fk_users_peoples1_idx');

            $table->index(["groups_id"], 'fk_users_groups1_idx');

            $table->unique(["email"], 'email_UNIQUE');
            $table->timestamps();

/*
            $table->foreign('peoples_id', 'fk_users_peoples1_idx')
                ->references('id')->on('peoples')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('coins_id', 'fk_users_coins1_idx')
                ->references('id')->on('coins')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('groups_id', 'fk_users_groups1_idx')
                ->references('id')->on('groups')
                ->onDelete('restrict')
                ->onUpdate('restrict');

                */
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
