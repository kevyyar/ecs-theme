const { src, dest, series, parallel, watch } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const imagemin = require('gulp-imagemin');
const browserSync = require('browser-sync').create();

function sassTask() {
  return src('assets/scss/**/*.scss', { sourcemaps: true })
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(dest('assets/css', { sourcemaps: '.' }))
    .pipe(browserSync.stream());
}

function jsTask() {
  return src('assets/js/src/*.js', { sourcemaps: true })
    .pipe(uglify())
    .pipe(dest('assets/js/dist', { sourcemaps: '.' }))
    .pipe(browserSync.stream());
}

function imagesTask() {
  return src('assets/images/**/*')
    .pipe(imagemin())
    .pipe(dest('assets/images/optimized'));
}

function watchTask() {
  browserSync.init({
    proxy: 'http://element-cleaning-systems.local/',
    notify: false,
  });
  watch('assets/scss/**/*.scss', sassTask);
  watch('assets/js/src/*.js', jsTask);
  watch('**/*.php', browserSync.reload);
}

exports.sass = sassTask;
exports.js = jsTask;
exports.images = imagesTask;
exports.watch = watchTask;
exports.default = series(parallel(sassTask, jsTask, imagesTask), watchTask);
