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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

/*************************************************************************/

// Instalation of Font Awesome: https://fontawesome.com/
mix.copy('vendor/fortawesome/font-awesome/css/font-awesome.min.css', 'public/css');
mix.copy('vendor/fortawesome/font-awesome/fonts/*', 'public/fonts');
// Don't forget to run: "npm run dev"
