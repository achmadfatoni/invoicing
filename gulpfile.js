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

elixir(function(mix){
    var nodeModule = 'node_modules/';
    var js  = 'resources/assets/js/';
    mix.copy(nodeModule + 'vue/dist/vue.min.js', js)
        .copy(nodeModule + 'vue-resource/dist/vue-resource.min.js', js)
        .copy(nodeModule + 'vue-validator/dist/vue-validator.js', js);

});

elixir(function(mix) {
    var js  = 'public/js/';
    mix.scripts(
        [
            'vue.min.js',
            'vue-resource.min.js',
        ], js + '/vendor.js');

    mix.copy('resources/assets/js/client.js', 'public/js/client.js');

    mix.browserSync({
        proxy: 'invoicing.dev'
    });
});
