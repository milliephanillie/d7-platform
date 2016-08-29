var gulp = require('gulp'),
	minify = require('gulp-minify'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	cssmin = require('gulp-cssmin'),
	rename = require('gulp-rename')
	;
	
gulp.task('sass', function () {
	gulp.src('src/scss/*.scss')
	 .pipe(sass().on('error', sass.logError))
     .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
     }))
     .pipe(gulp.dest('css'))
     .pipe(cssmin())
     .pipe(rename({suffix: '.min'}))
     .pipe(gulp.dest('css'))
     ;
});

gulp.task('compress', function() {
  gulp.src('src/js/*.js')
    .pipe(minify({
        ext:{
            src:'.js',
            min:'.min.js'
        }
    }))
    .pipe(gulp.dest('js'))
    ;
});

gulp.task('watch', function () {
	gulp.watch('src/scss/**/*.scss', ['sass']);
	gulp.watch('src/js/**/*.js', ['compress']);
});
