# PASOS PARA LA INSTALACIÓN

## Instalación inicial
* git clone https://github.com/wmcarlosv/e-commerce-bio.git
* cd e-commerce-bio
* chmod -R 777 storage
* composer install

## Configuración de la Base de datos
* cp .env.example .env
* configurar los datos de la base de datos en el archivo .env
* php artisan key:generate
* php artisan migrate

## Instalación del passport
* php artisan passport:install

## Webpack para las vistas
* npm install
* npm run dev

## Configuración del servidor

### si no conoce el postgresql (Windows)
* activar la extensión pdo_pgsql y pgsql en el php.ini

### si no conoce el postgresql (Linux)
* apt-get install php-pgsql

### error en el htaccess (Windows)
* activar el mod_rewrite en el httpd.conf

### error en el htaccess (Linux)
* sudo a2enmod rewrite