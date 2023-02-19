const mix = require('laravel-mix');

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
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.js('public/frontView/assets/js/main.js', 'public/frontView/minify/js/main.min.js');
mix.js('public/frontView/assets/js/custom.js', 'public/frontView/minify/js/custom.min.js');
mix.js('public/frontView/assets/css/style.css', 'public/frontView/minify/css/style.min.css');
mix.js('public/frontView/assets/css/custom.css', 'public/frontView/minify/css/custom.min.css');