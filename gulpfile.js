var gulp = require('gulp'),
    gutil = require('gulp-util'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),


    input = {
      'stylesheet': 'src/sass/**/*.scss',
      'javascript': 'src/js/**/*.js',
    },

    production = {
      'javascript':'production/',
      'stylesheet':'production/',
    },

    output = {
      'stylesheet':'build/',
      'javascript':'build/'
    };

    dependencies = [
      './bower_components/jquery/dist/jquery.min.js',
      './bower_components/js-cookie/src/js.cookie.js',
      './bower_components/slick-carousel/slick/slick.min.js',
      'src/js/settings.js',
      'src/js/main.js',
      input.javascript
    ];


gulp.task('default', ['watch']);

gulp.task('sass',function(){

  return gulp.src(input.stylesheet)
    .pipe(gutil.env.type !== 'production' ? sourcemaps.init() : gutil.noop())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gutil.env.type !== 'production' ? sourcemaps.write() : gutil.noop())
    .pipe(gutil.env.type !== 'production' ? gulp.dest(output.stylesheet) : gulp.dest(production.stylesheet));

});

gulp.task('javascript', function(){

  return gulp.src(dependencies)

    .pipe(gutil.env.type !== 'production' ? sourcemaps.init() : gutil.noop())
    .pipe(concat('bundle.js'))
    .pipe(gutil.env.type === 'production' ? uglify() : gutil.noop())
    .pipe(gutil.env.type !== 'production' ? sourcemaps.write() : gutil.noop())
    .pipe(gutil.env.type !== 'production' ? gulp.dest(output.javascript) : gulp.dest(production.javascript));

});

gulp.task('watch', ['sass','javascript'], function(){
  gulp.watch(input.stylesheet, ['sass']);
  gulp.watch(input.javascript, ['javascript']);
});
