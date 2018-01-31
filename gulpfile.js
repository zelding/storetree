const elixir = require('laravel-elixir');

let paths = {
    'js_prv'   : "resources/assets/js/",
    'css_prv'  : "resources/assets/css/",
    'select2'  : "bower_components/select2/",
    'select2bs': "bower_components/select2-bootstrap-theme/"
};

elixir(function(mix) {
    mix.copy(paths.select2 + "dist/js/select2.full.js", 'public/js')
       .copy(paths.select2 + "dist/css/select2.css", paths.css_prv)
       .copy(paths.select2bs + "dist/select2-bootstrap.css", paths.css_prv)
       .copy('node_modules/datatables/media/css/jquery.dataTables.css', paths.css_prv)


       //.copy('node_modules/jquery-sortable/source/css/jquery-sortable.css.sass', 'resources/assets/sass')

       .copy('node_modules/datatables-bootstrap3-plugin/media/css/datatables-bootstrap3.less', 'resources/assets/less')
       .copy('bower_components/iCheck/icheck.js', 'public/js')
       .copy('bower_components/iCheck/skins/minimal/_all.css', 'public/css')
       .copy('node_modules/jquery-sortable/source/js/jquery-sortable-min.js', 'public/js')
    ;

    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
    mix.copy('bower_components/iCheck/skins/minimal/**.png', 'public/css');

    //mix.sass('jquery-sortable.css.sass', 'public/css');

    mix.sass('app.scss')
        .less('datatables-bootstrap3.less')
        .styles([
            'main.css',
            'select2.css',
            'jquery.dataTables.css',
            'select2-bootstrap.css'
        ], 'public/css/main.css')
        .browserify([
            'app.js'
            //'select2.full.js'
        ], 'public/js/app.js');
});
