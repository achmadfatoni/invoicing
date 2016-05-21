var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    var nodeModule = 'node_modules/';
    var js  = 'public/js/';
    mix.copy(nodeModule + 'vue/dist/vue.min.js', js)
        .copy(nodeModule + 'vue-resource/dist/vue-resource.min.js', js);
});
