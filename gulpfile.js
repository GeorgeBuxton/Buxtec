// gulpfile.js JavaScript Document

var gulp = require('gulp'),
	gutil = require('gulp-util'),
	browserify = require('gulp-browserify'),
	compass = require('gulp-compass'),
	plumber = require('gulp-plumber'),
	react = require('gulp-react'),
	concat = require('gulp-concat');

var reactSources = ['components/react/app.js'];
var jsSources = ['components/scripts/*.js'];
var sassSources = ['components/sass/main.sass'];

gulp.task('log', function(){
	gutil.log('Hello from gulp.js');
});

/*
gulp.task('react', function () {
    return gulp.src(reactSources)
        .pipe(react())
        .pipe(gulp.dest('components/scripts'))
});
*/

gulp.task('js', function(){
	gulp.src(jsSources)
		.pipe(concat('main.js'))
		.pipe(browserify())
		.pipe(gulp.dest('builds/development/js'))
});

gulp.task('compass', function() {
  gulp.src(sassSources)
    .pipe(plumber({
      errorHandler: function (error) {
        console.log(error.message);
        this.emit('end');
    }}))
    .pipe(compass({
      css: 'builds/development/css',
      sass: 'components/sass',
      image: 'builds/development/images',
	  style: 'expanded'
    }))
    .on('error', function(err) {
      console.log(error.message);
    })
    .pipe(gulp.dest('builds/development/css'));
});

gulp.task('watch', function() {
	gulp.watch(jsSources, ['js']);
	gulp.watch('components/sass/main.sass', ['compass']);
});

gulp.task('default', ['js', 'compass']);