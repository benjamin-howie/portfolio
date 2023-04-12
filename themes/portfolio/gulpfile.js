let gulp = require('gulp');
let cleanCSS = require('gulp-clean-css');
let sass = require('gulp-sass')(require('sass'));
let rename = require('gulp-rename');
let minify = require('gulp-minify');
let concat = require('gulp-concat');
let sourcemaps = require('gulp-sourcemaps');
let autoprefixer = require('autoprefixer');
let postcss = require('gulp-postcss');

// Minifies the CSS
gulp.task('minify-css', () => {
  return gulp
    .src('assets/css/style.css')
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(gulp.dest('assets/css'));
});

// Parses SASS to CSS
gulp.task('sass', function () {
  return gulp
    .src('assets/src/sass/style.scss')
    .pipe(sourcemaps.init())
    .pipe(
      sass({
        includePaths: ['node_modules'],
      })
    )
    .pipe(rename('style.css'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('assets/css'));
});

// Minifies JS
gulp.task('minify-js', () => {
  return gulp
    .src('assets/src/js/*.js')
    .pipe(concat('script.js'))
    .pipe(minify())
    .pipe(gulp.dest('assets/js/'));
});

gulp.task('autoprefixer', () => {
  return gulp
    .src('assets/css/style.css')
    .pipe(sourcemaps.init())
    .pipe(postcss([autoprefixer('last 99 versions')]))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('assets/css'));
});

// Watches the files and automatically updates them when save is clicked
gulp.task('watch', () => {
  gulp.watch(['assets/src/sass/**/*.scss'], gulp.series(['sass']));
  gulp.watch(['assets/src/js/*.js'], gulp.parallel(['minify-js']));
});

// Compiles the JS and SASS as a one off for "dev/staging" purposes
gulp.task('dev', gulp.series(['sass', 'minify-js']));

// Compiles the JS and SASS as a one off for "production/live" purposes
gulp.task(
  'live',
  gulp.series(['sass', 'minify-css', 'autoprefixer', 'minify-js'])
);
