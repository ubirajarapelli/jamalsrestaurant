var gulp = require('gulp'),
	plumber = require('gulp-plumber'),
	less = require('gulp-less'),
	cssnano = require('gulp-cssnano'),
	rename = require('gulp-rename'),
	notify = require('gulp-notify'),
	autoprefixer = require('gulp-autoprefixer'),
	jshint = require('gulp-jshint'),
	stylish = require('jshint-stylish'),
	//concat = require('gulp-concat'),
	//uglify = require('gulp-uglify'),
	//spritesmith = require('gulp-spritesmith'),
	browserSync = require('browser-sync').create();

gulp.task('less', function () {
  return gulp.src(['_template/less/**/[^_]*.less'])
  .pipe(plumber())
	.pipe(less().on('error', notify.onError("Deu ruim: <%= error.message %>")))
	//.pipe(minifyCss())
	//.pipe(rename({suffix: '.min'}))
	//.pipe(gulp.dest('template/css'))
	.pipe(gulp.dest('app/css'))
	.pipe(autoprefixer({
		browsers: ['last 2 versions'],
		cascade: false
	}))
	.pipe(notify('CSS OK!'));
});

// gulp.task('copyfonts', function() {
//    gulp.src('_template/fonts/**/*.{ttf,woff,eof,svg}')
//    .pipe(gulp.dest('template/fonts'));
// });

gulp.task('js', function () {
  return gulp.src(['_template/js/**/*.js'])
  	.pipe(plumber())
    //.pipe(uglify())
    .pipe(gulp.dest('app/js'))
    .pipe(notify('JS nice!'));
});

gulp.task('jshint', function () {
  return gulp.src(['_template/js/**/*.js'])
  	.pipe(plumber())
    .pipe(jshint())
    .pipe(jshint.reporter(stylish));
});

gulp.task('browser-sync', function () {
	var files = [
		'app/*.php',
		'app/*.html',
		'app/css/*.css',
		'app/js/*.js',
	];

	// browserSync.init(files, {
	//     open: false,
	//     server: {
	//     baseDir: './dist/'
	//     }
	// });

		browserSync.init(files,{
			// proxy: "http://localhost:8888/jamalrestaurant/app/",
			// port: '3000'
		proxy: 'http://localhost/~ubirajarapelli/jamalsrestaurant/app/',
		port: '3000'
	});

	gulp.watch('_template/less/*.less', ['less']);
	gulp.watch('_template/js/*.js', ['js']);
	gulp.watch('_template/js/*.js',['jshint']);
	gulp.watch(files).on('change', browserSync.reload);
});

gulp.task('server', ['browser-sync']);

