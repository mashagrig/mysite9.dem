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


mix.styles(
    [
        'resources/sass/css/fancybox/jquery.fancybox.css',
        'resources/sass/css/animate.css',
        'resources/sass/css/bootstrap.min.css',
        'resources/sass/css/font-awesome.min.css',
        'resources/sass/css/jquery-ui.css',
        'resources/sass/css/main.css',
        'resources/sass/css/meanmenu.min.css',
        'resources/sass/css/normalize.css',
        'resources/sass/css/owl.carousel.css',
        'resources/sass/css/owl.theme.css',
        'resources/sass/css/owl.transitions.css',
        'resources/sass/css/responsive.css',
        'resources/sass/css/style.css',
        'resources/js/lib/rs-plugin/css/settings.css',
        'resources/js/lib/rs-plugin/css/settings-ie8.css'
    ],
    'public/css/app.css'
);
mix.copy(['resources/sass/fonts',
            'resources/js/lib/rs-plugin/font'
],  'public/fonts');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
