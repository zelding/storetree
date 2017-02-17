const elixir = require('laravel-elixir');

let paths = {
    'select2': "bower_components/select2/",
    'select2bs': "bower_components/select2-bootstrap-theme/"
};

elixir(function(mix) {
    mix.copy(paths.select2 + "dist/js/select2.full.js", "resources/assets/js")
        .copy(paths.select2 + "dist/css/select2.css", "resources/assets/css")
        .copy(paths.select2bs + "dist/select2-bootstrap.css", "resources/assets/css")
        .copy('node_modules/datatables/media/css/jquery.dataTables.css', 'resources/assets/css')
        .copy('node_modules/datatables-bootstrap3-plugin/media/css/datatables-bootstrap3.less', 'resources/assets/less');

    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');

    mix.sass('app.scss')
        .less('datatables-bootstrap3.less')
        .styles([
            'main.css',
            'select2.css',
            'jquery.dataTables.css',
            'select2-bootstrap.css'
        ], 'public/css/main.css')
        .browserify([
            'select2.full.js',
            'app.js'
        ], 'public/js/app.js');
});
