<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Leche Camprolac',
                'description_short' => 'Leche en Polvo Completa',
                'description' => '<p>Leche en polvo completa camprolat para adultos y ni&ntilde;os</p>',
                'price' => '250000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => '12312',
                'promote' => 0,
                'discount' => '90.000000',
                'photo' => '["products\\\\March2020\\\\uDx8ZYGflthS3iEIePj8.jpeg","products\\\\March2020\\\\Send6eZvnmqKe8qSGfkP.jpg","products\\\\March2020\\\\zX7eCwIVkD5sOVrHbQif.png"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => false,
                'created_at' => NULL,
                'updated_at' => '2020-03-26 00:38:53',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'Coca cola 2L',
                'description_short' => 'Coca colar',
                'description' => NULL,
                'price' => '90000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '5',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\March2020\\\\ljoInxtxhE8zpmOnDSFn.png"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => false,
                'created_at' => '2020-01-29 17:11:39',
                'updated_at' => '2020-03-26 00:51:19',
            ),
            2 => 
            array (
                'id' => 18,
                'name' => 'Perro caliente',
                'description_short' => '2 Harinas de maíz blanco - 1 kg
1 Arroz blanco tipo 1 - 1 kg
1 Pasta larga o corto - 1 kg
1 Harina de trigo - 1 kg
1 Azúcar refinada - 1 kg
1 Sal de mar - 1 kg
1 Café - 500 g',
                'description' => '<p>2 Harinas de ma&iacute;z blanco - 1 kg</p>
<p>1 Arroz blanco tipo 1 - 1 kg</p>
<p>1 Pasta larga o corto - 1 kg</p>
<p>1 Margarina - 500 g</p>
<p>1 Aceite de ma&iacute;z o soya - 1 L</p>
<p>1 Harina de trigo - 1 kg</p>
<p>1 Az&uacute;car refinada - 1 kg</p>
<p>1 Sal de mar - 1 kg</p>
<p>1 Caf&eacute; - 500 g</p>
<p>1 Vinagre - 500 ml</p>
<p>1 Fororo - 900 g</p>
<p>1 Leche en polvo - 400 g</p>
<p>2 Sardinas de lata - 260 g</p>
<p>1 Granos - 500 g</p>',
                'price' => '300000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '5',
                'qty_min' => 1,
                'qty_max' => 1,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => '344343',
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\April2020\\\\n1I2qSg2jLwfYZ0Talf1.jpg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => true,
                'created_at' => '2020-04-01 14:03:06',
                'updated_at' => '2020-04-01 14:03:06',
            ),
            3 => 
            array (
                'id' => 12,
                'name' => 'Salsa Heinz 230g',
                'description_short' => 'Salsa de tomate heinz',
                'description' => NULL,
                'price' => '100000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 60,
                'user_rating' => '5',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\March2020\\\\6dwlesPtD3RVsqtX0Ew1.jpg","products\\\\March2020\\\\cq9wBG0qzO6yHyQKnRir.jpg"]',
                'stores_id' => 1,
                'brands_id' => 3,
                'is_combo' => false,
                'created_at' => '2020-02-04 22:41:48',
                'updated_at' => '2020-03-26 00:49:36',
            ),
            4 => 
            array (
                'id' => 20,
                'name' => 'Pollo Bio',
                'description_short' => '2 Harinas de maíz blanco - 1 kg
1 Arroz blanco tipo 1 - 1 kg
1 Pasta larga o corto - 1 kg
1 Margarina - 500 g
1 Aceite de maíz o soya - 1 L
1 Harina de trigo - 1 kg',
                'description' => '<p>2 Harinas de ma&iacute;z blanco - 1 kg</p>
<p>1 Arroz blanco tipo 1 - 1 kg</p>
<p>1 Pasta larga o corto - 1 kg</p>
<p>1 Margarina - 500 g</p>
<p>1 Aceite de ma&iacute;z o soya - 1 L</p>
<p>1 Harina de trigo - 1 kg</p>
<p>1 Az&uacute;car refinada - 1 kg</p>
<p>1 Sal de mar - 1 kg</p>
<p>1 Caf&eacute; - 500 g</p>
<p>1 Vinagre - 500 ml</p>
<p>1 Fororo - 900 g</p>
<p>1 Leche en polvo - 400 g</p>
<p>2 Sardinas de lata - 260 g</p>
<p>1 Granos - 500 g</p>',
                'price' => '10000000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 5,
                'user_rating' => '4',
                'qty_min' => 1,
                'qty_max' => 5,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\April2020\\\\vOdinFHD8yX8quRI3O3W.jpg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => true,
                'created_at' => '2020-04-01 14:04:27',
                'updated_at' => '2020-04-01 14:04:27',
            ),
            5 => 
            array (
                'id' => 15,
                'name' => 'Charcuteria Bio',
                'description_short' => '2 Harinas de maíz blanco - 1 kg
1 Arroz blanco tipo 1 - 1 kg
1 Pasta larga o corto - 1 kg
1 Margarina - 500 g
1 Aceite de maíz o soya - 1 L
1 Harina de trigo - 1 kg',
                'description' => '<p>2 Harinas de ma&iacute;z blanco - 1 kg</p>
<p>1 Arroz blanco tipo 1 - 1 kg</p>
<p>1 Pasta larga o corto - 1 kg</p>
<p>1 Margarina - 500 g</p>
<p>1 Aceite de ma&iacute;z o soya - 1 L</p>
<p>1 Harina de trigo - 1 kg</p>
<p>1 Az&uacute;car refinada - 1 kg</p>
<p>1 Sal de mar - 1 kg</p>
<p>1 Caf&eacute; - 500 g</p>
<p>1 Vinagre - 500 ml</p>
<p>1 Fororo - 900 g</p>
<p>1 Leche en polvo - 400 g</p>
<p>2 Sardinas de lata - 260 g</p>
<p>1 Granos - 500 g</p>',
                'price' => '5000000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 14,
                'user_rating' => '5',
                'qty_min' => 1,
                'qty_max' => 5,
                'keyword' => 'combos, bio',
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\April2020\\\\I3KqH8Bdu96Oi4nZh1ol.jpg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => true,
                'created_at' => '2020-04-01 13:59:41',
                'updated_at' => '2020-04-01 13:59:41',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'Mayonesa hellmann',
                'description_short' => 'Mayonesa hellmann',
                'description' => NULL,
                'price' => '2000000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 61,
                'user_rating' => '3',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\March2020\\\\T0OrYoFLiXYI6HjAtSAw.png"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => false,
                'created_at' => '2020-01-29 17:34:04',
                'updated_at' => '2020-03-26 00:50:07',
            ),
            7 => 
            array (
                'id' => 16,
                'name' => 'Cuidado personal',
                'description_short' => '2 Harinas de maíz blanco - 1 kg
1 Arroz blanco tipo 1 - 1 kg
1 Pasta larga o corto - 1 kg
1 Margarina - 500 g
1 Aceite de maíz o soya - 1 L
1 Harina de trigo - 1 kg
1 Azúcar refinada - 1 kg',
                'description' => '<p>2 Harinas de ma&iacute;z blanco - 1 kg</p>
<p>1 Arroz blanco tipo 1 - 1 kg</p>
<p>1 Pasta larga o corto - 1 kg</p>
<p>1 Margarina - 500 g</p>
<p>1 Aceite de ma&iacute;z o soya - 1 L</p>
<p>1 Harina de trigo - 1 kg</p>
<p>1 Az&uacute;car refinada - 1 kg</p>',
                'price' => '1000000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 12,
                'user_rating' => '3',
                'qty_min' => 1,
                'qty_max' => 5,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => '23423',
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\April2020\\\\hNfuWM0mxUgfRtHPhtzj.jpg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => true,
                'created_at' => '2020-04-01 14:00:31',
                'updated_at' => '2020-04-01 14:00:31',
            ),
            8 => 
            array (
                'id' => 17,
                'name' => 'Hamburguesa',
                'description_short' => '2 Harinas de maíz blanco - 1 kg
1 Arroz blanco tipo 1 - 1 kg
1 Pasta larga o corto - 1 kg
1 Margarina - 500 g
1 Aceite de maíz o soya - 1 L
1 Harina de trigo - 1 kg
1 Azúcar refinada - 1 kg',
                'description' => '<p>2 Harinas de ma&iacute;z blanco - 1 kg</p>
<p>1 Arroz blanco tipo 1 - 1 kg</p>
<p>1 Pasta larga o corto - 1 kg</p>
<p>1 Margarina - 500 g</p>
<p>1 Aceite de ma&iacute;z o soya - 1 L</p>
<p>1 Harina de trigo - 1 kg</p>
<p>1 Az&uacute;car refinada - 1 kg</p>
<p>1 Sal de mar - 1 kg</p>
<p>1 Caf&eacute; - 500 g</p>
<p>1 Vinagre - 500 ml</p>
<p>1 Fororo - 900 g</p>
<p>1 Leche en polvo - 400 g</p>
<p>2 Sardinas de lata - 260 g</p>
<p>1 Granos - 500 g</p>
<p>&nbsp;</p>',
                'price' => '400000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 4,
                'user_rating' => '1',
                'qty_min' => 1,
                'qty_max' => 10,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\April2020\\\\7R5xKtj9ZPm64qDvAoLX.jpg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => true,
                'created_at' => '2020-04-01 14:01:35',
                'updated_at' => '2020-04-01 14:01:52',
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'Carnes Bio',
                'description_short' => '2 Harinas de maíz blanco - 1 kg
1 Arroz blanco tipo 1 - 1 kg
1 Pasta larga o corto - 1 kg
1 Margarina - 500 g
1 Aceite de maíz o soya - 1 L
1 Harina de trigo - 1 kg
1 Azúcar refinada - 1 kg',
                'description' => '<p>2 Harinas de ma&iacute;z blanco - 1 kg</p>
<p>1 Arroz blanco tipo 1 - 1 kg</p>
<p>1 Pasta larga o corto - 1 kg</p>
<p>1 Margarina - 500 g</p>
<p>1 Aceite de ma&iacute;z o soya - 1 L</p>
<p>1 Harina de trigo - 1 kg</p>
<p>1 Az&uacute;car refinada - 1 kg</p>
<p>1 Sal de mar - 1 kg</p>
<p>1 Caf&eacute; - 500 g</p>
<p>1 Vinagre - 500 ml</p>
<p>1 Fororo - 900 g</p>
<p>1 Leche en polvo - 400 g</p>
<p>2 Sardinas de lata - 260 g</p>
<p>1 Granos - 500 g</p>',
                'price' => '3000000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 12,
                'user_rating' => '5',
                'qty_min' => 1,
                'qty_max' => 5,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => '54545',
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\April2020\\\\XOCtHcWFy3QmDeLoJxlk.jpg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => true,
                'created_at' => '2020-04-01 13:58:04',
                'updated_at' => '2020-04-01 13:58:17',
            ),
            10 => 
            array (
                'id' => 9,
                'name' => 'PASTA PARMIGIANA CORTA  250G',
                'description_short' => 'PASTA PARMIGIANA CORTA  250G GRUESA HUEVO',
                'description' => NULL,
                'price' => '90000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 62,
                'user_rating' => '5',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\March2020\\\\iICOqKFBzFo6SngDXcKa.jpeg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => false,
                'created_at' => '2020-01-29 17:29:20',
                'updated_at' => '2020-03-26 00:50:23',
            ),
            11 => 
            array (
                'id' => 8,
                'name' => 'Arroz Mary 1KG',
                'description_short' => 'ARROZ MARY SUPERIOR 97% 1KG',
                'description' => NULL,
                'price' => '125800.500000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 121,
                'user_rating' => '5',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\March2020\\\\Ynl0NjpjAgMUUwgSYTQx.jpg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => false,
                'created_at' => '2020-01-29 17:23:30',
                'updated_at' => '2020-03-26 00:50:35',
            ),
            12 => 
            array (
                'id' => 1,
                'name' => 'Harina Pan',
                'description_short' => 'Harina de Maíz Blanco',
                'description' => '<p>oio</p>',
                'price' => '100000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 63,
                'user_rating' => '5',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => '123412343',
                'promote' => 0,
                'discount' => '99.900000',
                'photo' => '["products\\\\March2020\\\\YdVXUx0ox2B7wCKohFse.jpg","products\\\\March2020\\\\9dvnVoApsyaxheJY2S3m.jpg"]',
                'stores_id' => 1,
                'brands_id' => 2,
                'is_combo' => false,
                'created_at' => NULL,
                'updated_at' => '2020-03-26 00:49:05',
            ),
            13 => 
            array (
                'id' => 3,
                'name' => 'La Campiña',
                'description_short' => 'Leche completa en polvo',
                'description' => NULL,
                'price' => '300000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 54,
                'user_rating' => '3',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\March2020\\\\RYQpRJH0IBu8fVkjvefA.jpg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => false,
                'created_at' => '2020-01-29 17:02:15',
                'updated_at' => '2020-03-26 00:51:49',
            ),
            14 => 
            array (
                'id' => 7,
                'name' => 'Salsa Iinglesa Olympia 150 CC',
                'description_short' => 'Salsa Iinglesa Olympia',
                'description' => NULL,
                'price' => '50000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 52,
                'user_rating' => '5',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\March2020\\\\ApW6mUWKvXrgx4ZrAnj1.jpg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => false,
                'created_at' => '2020-01-29 17:17:59',
                'updated_at' => '2020-03-26 00:50:48',
            ),
            15 => 
            array (
                'id' => 6,
                'name' => 'Ron Cacique 500 1,5 L',
                'description_short' => 'Ron Cacique',
                'description' => NULL,
                'price' => '500000.000000',
                'qty_avaliable' => 18,
                'qty_sold' => 0,
                'qty_view' => 184,
                'user_rating' => '4',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\March2020\\\\7qwd7qDEjNU702lGCakK.jpg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => false,
                'created_at' => '2020-01-29 17:13:58',
                'updated_at' => '2020-03-26 00:51:02',
            ),
            16 => 
            array (
                'id' => 4,
                'name' => 'Aceite Vatel',
                'description_short' => 'Aceite Vatel de Soya',
                'description' => NULL,
                'price' => '100000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 28,
                'user_rating' => '2',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\March2020\\\\nfR5w7gymZ67U62Leh2e.jpeg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => false,
                'created_at' => '2020-01-29 17:08:14',
                'updated_at' => '2020-03-26 00:51:30',
            ),
            17 => 
            array (
                'id' => 13,
                'name' => 'Cesta Bio',
                'description_short' => '2 Harinas, 1 Arroz blanco, 1 Pasta larga, 1 Margarina,1 Aceite de maíz o soya ,1 Harina de trigo ,1 Azúcar refinada, 1 Sal de mar y mas',
                'description' => '<p>2 Harinas de ma&iacute;z blanco - 1 kg</p>
<p>1 Arroz blanco tipo 1 - 1 kg</p>
<p>1 Pasta larga o corto - 1 kg</p>
<p>1 Margarina - 500 g</p>
<p>1 Aceite de ma&iacute;z o soya - 1 L</p>
<p>1 Harina de trigo - 1 kg</p>
<p>1 Az&uacute;car refinada - 1 kg</p>
<p>1 Sal de mar - 1 kg</p>
<p>1 Caf&eacute; - 500 g</p>
<p>1 Vinagre - 500 ml</p>
<p>1 Fororo - 900 g</p>
<p>1 Leche en polvo - 400 g</p>
<p>2 Sardinas de lata - 260 g</p>
<p>1 Granos - 500 g</p>',
                'price' => '2000000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 120,
                'user_rating' => '5',
                'qty_min' => 1,
                'qty_max' => 5,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => '3443434',
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\April2020\\\\aXalGv8Ka2nlK0WJRqpu.jpg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => true,
                'created_at' => '2020-04-01 13:55:18',
                'updated_at' => '2020-04-01 13:58:38',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Pizza bio',
                'description_short' => '2 Harinas de maíz blanco - 1 kg
1 Arroz blanco tipo 1 - 1 kg
1 Pasta larga o corto - 1 kg
1 Margarina - 500 g
1 Aceite de maíz o soya - 1 L',
                'description' => '<p>2 Harinas de ma&iacute;z blanco - 1 kg</p>
<p>1 Arroz blanco tipo 1 - 1 kg</p>
<p>1 Pasta larga o corto - 1 kg</p>
<p>1 Margarina - 500 g</p>
<p>1 Aceite de ma&iacute;z o soya - 1 L</p>
<p>1 Harina de trigo - 1 kg</p>
<p>1 Az&uacute;car refinada - 1 kg</p>
<p>1 Sal de mar - 1 kg</p>
<p>1 Caf&eacute; - 500 g</p>
<p>1 Vinagre - 500 ml</p>
<p>1 Fororo - 900 g</p>
<p>1 Leche en polvo - 400 g</p>
<p>2 Sardinas de lata - 260 g</p>
<p>1 Granos - 500 g</p>',
                'price' => '5000000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 85,
                'user_rating' => '3',
                'qty_min' => 1,
                'qty_max' => 5,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => '4343344',
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => '["products\\\\April2020\\\\Hank2HMyC1LdKgEPkA1n.jpg"]',
                'stores_id' => 1,
                'brands_id' => NULL,
                'is_combo' => true,
                'created_at' => '2020-04-01 14:03:51',
                'updated_at' => '2020-04-01 14:03:51',
            ),
        ));
        
        
    }
}