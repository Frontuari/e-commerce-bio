const mix = require('laravel-mix');
const {CleanWebpackPlugin} = require('clean-webpack-plugin');

// paths to clean
var pathsToClean = [
    'public/assets/app/js',
    'public/assets/app/css',
    'public/assets/frontend/js',
    'public/assets/frontend/css',
];

mix.webpackConfig({
    plugins: [
        new CleanWebpackPlugin({
            cleanOnceBeforeBuildPatterns: pathsToClean
        })
    ]
});

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/*
 |--------------------------------------------------------------------------
 | Core
 |--------------------------------------------------------------------------
 |
 */

// mix.styles([
//     'node_modules/font-awesome/css/font-awesome.css',
// ], 'public/assets/app/css/app.css').version();

// mix.copy([
//     'node_modules/font-awesome/fonts/',
// ], 'public/assets/app/fonts');


mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    //'node_modules/pace-progress/pace.js',

], 'public/assets/app/js/app.js').version();


/*
 |--------------------------------------------------------------------------
 | Frontend
 |--------------------------------------------------------------------------
 |
 */


 mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/animate.css/animate.min.css',
    // 'public/assets/css/style.css',
    // 'public/assets/css/bree-font.css',
], 'public/assets/frontend/css/style.css').version();

 mix.scripts([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/popper.js/dist/umd/popper.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
], 'public/assets/frontend/js/build.js').version();

//  mix.copy([
//     'node_modules/gentelella/vendors/bootstrap/dist/fonts',
//     'node_modules/font-awesome/fonts/',
// ], 'public/assets/frontend/fonts');