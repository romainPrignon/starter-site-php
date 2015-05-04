'use strict';

var gulp = require('gulp');
var uglify = require('gulp-uglify');
var uglifycss = require('gulp-uglifycss');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');

// var rev = require('gulp-rev');

gulp.task('build:scripts', function () {
  return gulp.src([
    'app/Resources/bower_components/jquery/dist/jquery.js',
    'app/Resources/bower_components/bootstrap/dist/js/bootstrap.js',
    'app/Resources/assets/js/**/*.js'])
    .pipe(sourcemaps.init())
    .pipe(concat('scripts.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('web/js'));
});

gulp.task('build:styles', function () {
  return gulp.src([
    'app/Resources/bower_components/bootstrap/dist/css/bootstrap.css',
    'app/Resources/assets/css/**/*.css'])
    .pipe(sourcemaps.init())
    .pipe(concat('styles.css'))
    .pipe(uglifycss())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('web/css'));
});

gulp.task('build:images', function() {
  return gulp.src('app/Resources/assets/img/**/*.*')
    .pipe(gulp.dest('web/img'));
});

gulp.task('build', ['build:styles', 'build:scripts', 'build:images']);
