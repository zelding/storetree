const elixir = require('laravel-elixir');

let paths = {
    'select2': "bower_components/select2/",
    'select2bs': "bower_components/select2-bootstrap-theme/"
};

elixir(function(mix) {
    mix.copy(paths.select2 + "dist/js/select2.full.js", "resources/assets/js")
        .copy(paths.select2 + "dist/css/select2.css", "resources/assets/css")
        .copy(paths.select2bs + "dist/select2-bootstrap.css", "resources/assets/css");

    mix.sass('app.scss')
        .styles([
            'main.css',
            'select2.css',
            'select2-bootstrap.css'
        ], 'public/css/main.css')
        .browserify(['app.js', 'select2.full.js'], 'public/js/app.js');
});
