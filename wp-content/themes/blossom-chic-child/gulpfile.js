const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cssNano = require('gulp-cssnano');
const browserSync = require('browser-sync').create();

// compile scss into css
function styles() {
  return gulp.src('./scss/styles.scss')
  .pipe(sass())
  .pipe(gulp.dest('./css'))
  .pipe(browserSync.stream());
}

// compile scss into css
function editor() {
  return gulp.src('./scss/editor.scss')
  .pipe(sass())
  .pipe(gulp.dest('./css'))
  .pipe(browserSync.stream());
}

function minifyEditor() {
  return gulp.src('./css/editor.css')
    .pipe(cssNano())
    .pipe(gulp.dest('./css'));
}

function minifyStyles() {
  return gulp.src('./css/styles.css')
    .pipe(cssNano())
    .pipe(gulp.dest('./css'));
}

function watch() {
  gulp.watch('./scss/**/*.scss', gulp.series(styles, editor));
}

exports.build = gulp.series(styles, editor);
exports.minify = gulp.series(minifyStyles, minifyEditor);
exports.watch = watch;