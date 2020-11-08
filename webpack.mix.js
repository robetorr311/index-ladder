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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/jquery.min.js','public/js')
    .js('resources/js/bootstrap.js','public/js')
    .js('resources/js/bootstrap.bundle.min.js','public/js')
    .js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps()
    .sass('resources/sass/one-page-wonder.scss', 'public/css')
    .css('resources/css/app.css', 'public/css')
    .css('resources/css/one-page-wonder.min.css', 'public/css')  
    .sass('resources/sass/app.scss', 'public/css');
