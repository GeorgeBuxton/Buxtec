// gulpfile.js JavaScript Document

var gulp = require('gulp'),
	gutil = require('gulp-util'),
	browserify = require('gulp-browserify'),
	concat = require('gulp-concat');

var jsSources = [
	'components/scripts/main.js'
];

gulp.task('js', function(){
	gulp.src(jsSources)
		.pipe(concat('main.js'))
		.pipe(browserify())
		.pipe(gulp.dest('build/development/js'))
});