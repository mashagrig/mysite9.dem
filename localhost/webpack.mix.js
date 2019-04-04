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
// mix.autoload({
//     jquery: ['$','jQuery','jquery','global.$','global.jQuery','global.jquery'],
//    // stellar: ['stellar']
// });

// var webpack = require('webpack');
// mix.webpackConfig({
//     plugins: [
//         new webpack.ProvidePlugin({
//         //    stellar : 'jquery.stellar',
//            // Stellar : 'exports-loader?Stellar!stellar'
//         })
//     ]
// });
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css/app.css');

mix
    .styles(
    [
       // 'resources/crossfits/css/style.css',

        'node_modules/jquery-ui/themes/base/base.css',

        'node_modules/bootstrap/dist/css/bootstrap.css',
        'node_modules/bootstrap/dist/css/bootstrap-grid.css',
        'node_modules/bootstrap/dist/css/bootstrap-reboot.css',

        'node_modules/aos/dist/aos.css',

        'node_modules/magnific-popup/dist/magnific-popup.css',

        'node_modules/mediaelement/src/css/mediaelementplayer.css',
        'node_modules/mediaelement/src/css/mediaelementplayer-legacy.css',

        'node_modules/owl.carousel/dist/assets/owl.carousel.css',
        'node_modules/owl.carousel/dist/assets/owl.theme.default.css',
        'node_modules/owl.carousel/dist/assets/owl.theme.green.css',

        'node_modules/animate.css/animate.min.css',

        'resources/crossfits/fonts/flaticon/font/flaticon.css',
        'resources/crossfits/fonts/icomoon/style.css',

        //'resources/crossfits/css/style.css',
        //'resources/sass/laravel.css'
    ],
    'public/css/app.css'
)
    .styles(
    [
        'resources/crossfits/css/style.css'
    ],
    'public/css/style.css'
);



mix
    .copy([
    'resources/crossfits/fonts/flaticon/font',
    'resources/crossfits/fonts/icomoon/fonts'
],  'public/fonts')

    .copy([
    'resources/crossfits/images'
],  'public/images');

