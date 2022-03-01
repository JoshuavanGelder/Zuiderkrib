const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
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

function watch() {
  browserSync.init({
    server: {
      baseDir: 'localhost/Zuiderkrib/Zuiderkrib'
    }
  });
  gulp.watch('./scss/**/*.scss', style);
}

exports.styles = styles;
exports.editor = editor;
exports.watch = watch;