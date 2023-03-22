const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/font-awesome/all.min.js', 'public/js/font-awesome')
    .js('resources/js/font-awesome/fontawesome.min.js', 'public/js/font-awesome')
    .css('resources/css/font-awesome/fontawesome.min.css', 'public/css/font-awesome')
    .css('resources/css/app.css', 'public/css')
    .css('node_modules/bootstrap/dist/css/bootstrap.css', 'public/css')
    .css('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css');
