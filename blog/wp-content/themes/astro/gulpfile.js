/*jslint node:true */

'use strict';

var gulp = require('gulp'),
    del = require('del'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    csso = require('gulp-csso'),
    watch = require('gulp-watch'),
    livereload = require('gulp-livereload'),
    minifyCss = require('gulp-minify-css'),
    autoprefixer = require('gulp-autoprefixer'),
    lec = require('gulp-line-ending-corrector'),
    rtlcss = require('gulp-rtlcss');


gulp.task('styles', function() {
    return gulp.src('src/sass/*.scss')
        .pipe(sass({outputStyle: 'expanded', unix_newlines: true, linefeed: "lf"}).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(minifyCss({
            keepSpecialComments: 1
        }))
        .pipe(rename("style.css"))
        .pipe(gulp.dest('./'));
});

gulp.task('styles-optional', function() {
    return gulp.src('src/sass/*.scss')
        .pipe(sass({outputStyle: 'expanded', unix_newlines: true, linefeed: "lf"}).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(lec())
        .pipe(rename("theme.css"))
        .pipe(gulp.dest('assets/css'));
});

gulp.task('styles-rtl', function() {
    return gulp.src('src/sass/*.scss')
        .pipe(sass({outputStyle: 'expanded', unix_newlines: true, linefeed: "lf"}).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(rtlcss())
        .pipe(lec())
        .pipe(rename("style-rtl.css"))
        .pipe(gulp.dest('.'));
});

gulp.task('scripts', function() {
    return gulp.src(['src/js/plugins/*.js', 'src/js/base.js'])
        .pipe(uglify())
        .pipe(concat('theme.min.js'))
        .pipe(gulp.dest('assets/js'));
});


gulp.task('default', function() {
    gulp.start('styles', 'styles-optional', 'styles-rtl', 'scripts', 'watch');
});


gulp.task('watch', function() {
    gulp.watch('src/sass/*.scss', ['styles', 'styles-optional']);
    gulp.watch('src/js/*.js', ['scripts']);
    livereload.listen();
    gulp.watch(['*']).on('change', livereload.changed);
});
