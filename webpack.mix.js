let mix = require('laravel-mix');

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

mix.js([
    'resources/assets/js/plugins/jquery.flot.js',
    'resources/assets/js/plugins/jquery-scrolllock.js',
    'resources/assets/js/plugins/jquery.dataTables.js',
    'resources/assets/js/plugins/dataTables.buttons.js',
    'resources/assets/js/plugins/buttons.print.js',
    'resources/assets/js/plugins/jszip.js',
    'resources/assets/js/plugins/buttons.html5.js',
    'resources/assets/js/plugins/lightgallery.js',
    'resources/assets/js/plugins/select2.full.js',
    'resources/assets/js/plugins/app.js',
    'resources/assets/js/app.js',
    ], 'public/js');

mix.sass('resources/assets/sass/app.sass', 'public/css');
