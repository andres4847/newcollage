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

// mix.webpackConfig({
//     resolve: {
//         modules: [
//             path.resolve(__dirname, 'bower_components/bootstrap'),
//             path.resolve(__dirname, 'bower_components/bootstrap-social')
//         ]
//     }
// });

 mix //.js('resources/assets/js/app.js', 'public/js')
// .less('resources/assets/sass/app.less', 'public/css')
.copy('bower_components/bootstrap/dist/css/bootstrap.min.css', 'public/css')
.copy('bower_components/bootstrap/dist/js/bootstrap.min.js', 'public/js')
.less('bower_components/bootstrap-social/bootstrap-social.less', 'public/css')
.copy('bower_components/font-awesome/css/font-awesome.min.css', 'public/css')
.copyDirectory('bower_components/font-awesome/fonts/', 'public/fonts')
.copyDirectory('bower_components/bootstrap/fonts', 'public/fonts')

// .sass('resources/assets/sass/app.scss', 'public/css')
.copy('bower_components/jquery/dist/jquery.min.js', 'public/js');
//    .sass('resources/assets/sass/custom.scss', 'public/css');
