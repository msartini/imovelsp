var gulp = require("gulp");
var ext = require('gulp-ext-replace');
var shell = require("gulp-shell");
var elixir = require('laravel-elixir');
var uglify = require('gulp-uglify');


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

elixir.extend('uglify', function() {

  gulp.task('uglify', function() {

    gulp.src('public/js/main.js')
        .pipe(uglify())
        .pipe(ext('min.js'))
        .pipe(gulp.dest('public/js/min'));
  });

  return this.queueTask('uglify');

});



elixir(function(mix) {
    mix.less('app.less');
});

elixir(function(mix) {
    mix.sass("main.scss");
});


elixir(function(mix) {
    mix.task('speak');
});

elixir(function(mix) {
    mix.scripts(['jquery.js', 'progressbar.js'], 'public/js/main.js')
    .uglify();
});




gulp.task("speak", function() {
    var message = 'Gerou arquivos com sucesso!!!';

    gulp.src('').pipe(shell('echo ' + message));
});

