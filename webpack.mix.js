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

mix.styles([
        'resources/views/css/style-app.css'
    ],  'public/css/style.css')

    .scripts([
        'resources/views/js/script-app.js',
        'resources/views/js/script-provider.js',
        'resources/views/js/script-service.js',
        'resources/views/js/script-user.js'
    ],  'public/js/script.js')

    .version();
