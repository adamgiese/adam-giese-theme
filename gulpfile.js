'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var livereload = require('gulp-livereload');
var autoprefixer = require('gulp-autoprefixer');
 
gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'))
        .pipe(autoprefixer())
        .pipe(livereload());
});

//Watch task
gulp.task('default',function() {
    livereload.listen();
    gulp.watch('sass/**/*.scss',['styles']);
});
