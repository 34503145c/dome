const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

// elixir(mix => {
//     mix.sass('app.scss')
//        .webpack('apps.js');
// });
elixir(function(mix) {
    mix.scripts(['./resources/assets/bower/vue/dist/vue.js', './resources/assets/source/b.js','./resources/assets/source/c.js',
        './resources/assets/source/bootstrap.js'], 'public/js/app.js');

    mix.version([

        'js/app.js',

    ]);
});