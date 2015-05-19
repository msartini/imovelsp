var gulp = require("gulp");
var shell = require("gulp-shell");
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

elixir(function(mix) {
    mix.less('app.less');
});

elixir(function(mix) {
    mix.sass("main.scss");
});


elixir(function(mix) {
    mix.task('speak');
});




gulp.task("speak", function() {
    var message = 'Gerou arquivos com sucesso!!!';

    gulp.src('').pipe(shell('echo ' + message));
});
    
