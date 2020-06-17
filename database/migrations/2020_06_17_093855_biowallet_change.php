<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BiowalletChange extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('biowallets', function (Blueprint $table) {
            $table->string('users_id')->change();
            $table->rename('users_id', 'email');
            $table->text('observacion')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('biowallets', function (Blueprint $table) {
            //
        });
    }
}
