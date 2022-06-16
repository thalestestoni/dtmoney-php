let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/css/app.scss', 'public/css')
    .sass('resources/css/header.scss', 'public/css')
    .sass('resources/css/dashboard.scss', 'public/css')
    .sass('resources/css/newTransactionModal.scss', 'public/css');
