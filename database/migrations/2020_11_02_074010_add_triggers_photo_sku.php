<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTriggersPhotoSku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        DROP TRIGGER IF EXISTS products_photo ON products;
        DROP FUNCTION IF EXISTS products_photo();


        CREATE OR REPLACE FUNCTION products_photo()
                RETURNS trigger AS
        $$
                BEGIN	
                    UPDATE products SET photo=NEW.photo WHERE sku=NEW.sku AND id<>NEW.id;
                    RETURN NEW;
                END;
        $$
        LANGUAGE 'plpgsql';   
        
        CREATE TRIGGER products_photo
                AFTER INSERT OR UPDATE
                ON products
                FOR EACH ROW
                WHEN (pg_trigger_depth() = 0)
                EXECUTE PROCEDURE products_photo();                  
      ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
