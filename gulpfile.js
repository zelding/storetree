const elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss')
        .styles(['main.css'])
        .browserify('app.js');
});
