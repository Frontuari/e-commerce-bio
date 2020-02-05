<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
                'server_side' => 0,
                'controller' => '',
                'policy_name' => NULL,
                'details' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
                'server_side' => 0,
                'controller' => '',
                'policy_name' => NULL,
                'details' => NULL,
            ),
            2 => 
            array (
                'id' => 10,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2020-01-23 22:26:37',
                'updated_at' => '2020-01-23 22:26:37',
                'server_side' => 0,
                'controller' => '',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'details' => NULL,
            ),
            3 => 
            array (
                'id' => 11,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Página',
                'display_name_plural' => 'Páginas',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2020-01-23 22:26:37',
                'updated_at' => '2020-01-23 22:26:37',
                'server_side' => 0,
                'controller' => '',
                'policy_name' => NULL,
                'details' => NULL,
            ),
            4 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'Usuario',
                'display_name_plural' => 'Usuarios',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-24 14:03:36',
                'server_side' => 0,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
            ),
            5 => 
            array (
                'id' => 25,
                'name' => 'rating_products',
                'slug' => 'rating-products',
                'display_name_singular' => 'Reputación de producto',
                'display_name_plural' => 'Reputación de productos',
                'icon' => NULL,
                'model_name' => 'App\\RatingProducts',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 14:52:36',
                'updated_at' => '2020-01-24 16:15:22',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            6 => 
            array (
                'id' => 24,
                'name' => 'banks',
                'slug' => 'banks',
                'display_name_singular' => 'Banco',
                'display_name_plural' => 'Bancos',
                'icon' => NULL,
                'model_name' => 'App\\Banks',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 14:50:21',
                'updated_at' => '2020-01-30 00:55:38',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'peoples',
                'slug' => 'peoples',
                'display_name_singular' => 'Dato personal',
                'display_name_plural' => 'Datos personales',
                'icon' => NULL,
                'model_name' => 'App\\People',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 13:31:04',
                'updated_at' => '2020-01-30 00:39:13',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            8 => 
            array (
                'id' => 26,
                'name' => 'products',
                'slug' => 'products',
                'display_name_singular' => 'Producto',
                'display_name_plural' => 'Productos',
                'icon' => NULL,
                'model_name' => 'App\\Products',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 15:05:08',
                'updated_at' => '2020-02-04 22:41:40',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            9 => 
            array (
                'id' => 20,
                'name' => 'brands',
                'slug' => 'brands',
                'display_name_singular' => 'Marca',
                'display_name_plural' => 'Marcas',
                'icon' => NULL,
                'model_name' => 'App\\Brand',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 14:44:40',
                'updated_at' => '2020-01-30 00:44:49',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            10 => 
            array (
                'id' => 34,
                'name' => 'orders',
                'slug' => 'orders',
                'display_name_singular' => 'Orden',
                'display_name_plural' => 'Ordenes',
                'icon' => NULL,
                'model_name' => 'App\\Orders',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 21:22:54',
                'updated_at' => '2020-01-30 00:26:19',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            11 => 
            array (
                'id' => 9,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Categoría',
                'display_name_plural' => 'Categorías',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\Categories',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-23 22:18:13',
                'updated_at' => '2020-02-03 21:53:49',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":"order","order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            12 => 
            array (
                'id' => 31,
                'name' => 'bank_datas',
                'slug' => 'bank-datas',
                'display_name_singular' => 'Dato bancario',
                'display_name_plural' => 'Datos bancarios',
                'icon' => NULL,
                'model_name' => 'App\\BankDatas',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 20:10:34',
                'updated_at' => '2020-01-30 00:58:46',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            13 => 
            array (
                'id' => 5,
                'name' => 'cities',
                'slug' => 'cities',
                'display_name_singular' => 'Parroquia',
                'display_name_plural' => 'Parroquias',
                'icon' => NULL,
                'model_name' => 'App\\Cities',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-23 21:21:05',
                'updated_at' => '2020-01-30 01:12:23',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":"name","scope":null}',
            ),
            14 => 
            array (
                'id' => 19,
                'name' => 'payment_methods',
                'slug' => 'payment-methods',
                'display_name_singular' => 'Metodo de pago',
                'display_name_plural' => 'Metodos de pagos',
                'icon' => NULL,
                'model_name' => 'App\\PaymentMethods',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 14:41:06',
                'updated_at' => '2020-01-30 01:00:16',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            15 => 
            array (
                'id' => 21,
                'name' => 'transports',
                'slug' => 'transports',
                'display_name_singular' => 'Transporte',
                'display_name_plural' => 'Transportes',
                'icon' => NULL,
                'model_name' => 'App\\Transports',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 14:47:07',
                'updated_at' => '2020-01-30 01:04:41',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            16 => 
            array (
                'id' => 33,
                'name' => 'taxes',
                'slug' => 'taxes',
                'display_name_singular' => 'Impuesto',
                'display_name_plural' => 'Impuestos',
                'icon' => NULL,
                'model_name' => 'App\\Taxes',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 21:07:40',
                'updated_at' => '2020-01-30 00:54:52',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            17 => 
            array (
                'id' => 14,
                'name' => 'coins',
                'slug' => 'coins',
                'display_name_singular' => 'Moneda',
                'display_name_plural' => 'Monedas',
                'icon' => NULL,
                'model_name' => 'App\\Coins',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 14:26:46',
                'updated_at' => '2020-01-30 01:01:40',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            18 => 
            array (
                'id' => 8,
                'name' => 'states',
                'slug' => 'states',
                'display_name_singular' => 'Estado',
                'display_name_plural' => 'Estados',
                'icon' => NULL,
                'model_name' => 'App\\States',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-23 21:36:08',
                'updated_at' => '2020-01-30 01:13:53',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            19 => 
            array (
                'id' => 23,
                'name' => 'packagings',
                'slug' => 'packagings',
                'display_name_singular' => 'Embalaje',
                'display_name_plural' => 'Embalajes',
                'icon' => NULL,
                'model_name' => 'App\\Packagings',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 14:49:33',
                'updated_at' => '2020-01-30 01:05:33',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            20 => 
            array (
                'id' => 28,
                'name' => 'sub_categories',
                'slug' => 'sub-categories',
                'display_name_singular' => 'Sub categoría',
                'display_name_plural' => 'Sub categorías',
                'icon' => NULL,
                'model_name' => 'App\\SubCategories',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 16:20:09',
                'updated_at' => '2020-02-04 23:12:38',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":"name","order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            21 => 
            array (
                'id' => 43,
                'name' => 'advs',
                'slug' => 'advs',
                'display_name_singular' => 'Publicidad',
                'display_name_plural' => 'Publicidades',
                'icon' => NULL,
                'model_name' => 'App\\Advs',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-29 02:11:23',
                'updated_at' => '2020-01-30 12:07:15',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            22 => 
            array (
                'id' => 15,
                'name' => 'stores',
                'slug' => 'stores',
                'display_name_singular' => 'Tienda',
                'display_name_plural' => 'Tiendas',
                'icon' => NULL,
                'model_name' => 'App\\Stores',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-24 14:31:55',
                'updated_at' => '2020-01-30 01:08:02',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            23 => 
            array (
                'id' => 6,
                'name' => 'regions',
                'slug' => 'regions',
                'display_name_singular' => 'Municipio',
                'display_name_plural' => 'Municipios',
                'icon' => NULL,
                'model_name' => 'App\\Regions',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-23 21:33:52',
                'updated_at' => '2020-01-30 01:09:03',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            24 => 
            array (
                'id' => 45,
                'name' => 'packages',
                'slug' => 'packages',
                'display_name_singular' => 'Combo',
                'display_name_plural' => 'Combos',
                'icon' => NULL,
                'model_name' => 'App\\Packages',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2020-01-30 12:27:46',
                'updated_at' => '2020-01-30 16:13:21',
                'server_side' => 0,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
        ));
        
        
    }
}