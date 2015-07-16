var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
  'assets': './resources/assets/',
  'bootstrap': './vendor/bower_components/bootstrap/',
  'fontawesome': './vendor/bower_components/fontawesome/',
  'jquery': './vendor/bower_components/jquery/',
  'metisMenu': './vendor/bower_components/metisMenu/'
};

elixir(function (mix) {
  mix.less('littera.less', 'public/css/littera.css')
    .less('app.less', 'public/css/app.css')
    .less('auth.less', 'public/css/auth.css')
    .less('common.less', 'public/css/common.css')
    .scriptsIn(paths.assets + 'js', 'public/js/app.js')
    .scripts([
      paths.jquery + 'dist/jquery.js',
      paths.bootstrap + 'dist/js/bootstrap.js'
    ], 'public/js/vendor.js', './')
    .scripts([
      paths.metisMenu + 'dist/metisMenu.js'
    ], 'public/js/littera.js', './')
    .copy(paths.fontawesome + 'fonts/**', 'public/fonts')
    .copy(paths.bootstrap + 'fonts/**', 'public/fonts');
});
