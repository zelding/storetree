const elixir = require('laravel-elixir');

var paths = {
    'js_prv': "resources/assets/js/",
    'css_prv': "resources/assets/css/",
    'select2': "bower_components/select2/",
    'select2bs': "bower_components/select2-bootstrap-theme/",
    'mat': "bower_components/bootstrap-material-design/dist/",
    'tether': "bower_components/tether/dist/"
};

elixir(function(mix) {
    mix.copy(paths.select2 + "dist/js/select2.full.js", paths.js_prv)
        .copy(paths.select2 + "dist/css/select2.css", paths.css_prv)
        .copy(paths.select2bs + "dist/select2-bootstrap.css", paths.css_prv)
        .copy('node_modules/datatables/media/css/jquery.dataTables.css', paths.css_prv)
        .copy('node_modules/datatables-bootstrap3-plugin/media/css/datatables-bootstrap3.less', 'resources/assets/less')
    //    .copy(paths.mat + 'bootstrap-material-design.css', 'public/css/mat.min.css')
    //    .copy(paths.mat + 'bootstrap-material-design.iife.js', 'public/js/mat.min.js')
    //    .copy(paths.tether + "js/tether.js", 'public/js')
        .copy('bower_components/iCheck/icheck.js', 'public/js')
        .copy('bower_components/iCheck/skins/minimal/_all.css', 'public/css')
        .copy('bower_components/iCheck/skins/minimal/**.png', 'public/css')
    ;

    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');

    mix.sass('app.scss')
        .less('datatables-bootstrap3.less')
        .styles([
            'main.css',
            'select2.css',
            'jquery.dataTables.css',
            'select2-bootstrap.css'
        ], 'public/css/main.css')
        //.styles('bootstrap-material-design.css', 'public/css/mat.min.css')
        //.browserify(['bootstrap-material-design.iife.js'], 'public/js/mat.min.js')
        .browserify([
            'select2.full.js',
            'app.js'
        ], 'public/js/app.js');
});
