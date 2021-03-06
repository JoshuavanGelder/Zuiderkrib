  /**
   *  gulpfile.js
   *  Author                      : Victor Tihai
   *
   *  Available tasks:
   *   `gulp`
   *   `gulp watch`
   *   `gulp clean`
   *   `gulp styles`
   *   `gulp styles:v`
   *   `gulp copyjs`
   *   `gulp copyfonts`
   *   `gulp scripts`
   *
   *  Modules:
   *   gulp                       : The streaming build system.
   *   del                        : Delete files and folders.
   *   gulp-jshint                : JSHint plugin for Gulp.
   *   gulp-sass                  : Gulp plugin for sass.
   *   gulp-sourcemaps            : Source map support for Gulp.js.
   *   gulp-uglify                : Minify files with UglifyJS.
   *   gulp-autoprefixer          : Prefix CSS.
   *   gulp-cache                 : A temp file based caching proxy task for gulp.
   *   gulp-concat                : This will concat files by your operating systems newLine.
   *   gulp-clean-css             : Minify CSS, using clean-css
   *   gulp-notify                : Send messages to Mac Notification Center,
   *   gulp-rename                : Provides simple file renaming methods
   *   gulp-rigger                : Include any type of text file (css, js, hmtl)
   *   gulp-combine-mq            : Combine matching media queries into one media query definition
   *   gulp-plumber               : Briefly it replaces pipe method and removes standard onerror
									handler on error event, which unpipes streams on error by default.
   */

// include gulp and gulp plug-ins
var gulp = require('gulp'),
	autoprefixer = require('gulp-autoprefixer'),
	cache = require('gulp-cache'),
	//cmq = require('gulp-combine-mq'),
	concat = require('gulp-concat'),
	del = require('del'),
	jshint = require('gulp-jshint'),
	cleancss = require('gulp-clean-css'),
	notify = require('gulp-notify'),
	plumber = require('gulp-plumber'),
	rename = require('gulp-rename'),
	rigger = require('gulp-rigger'),
	sass = require('gulp-sass'),
	//sourcemaps = require('gulp-sourcemaps'),
	wpPot = require('gulp-wp-pot'),
	uglify = require('gulp-uglify');


var paths = {
	home: './',
	assets_css: './assets/styles/',
	assets_js: './assets/javascripts/',
	assets_font: './assets/webfonts/',
	lang_file: './languages/makenzie-lite.pot',
	src_css_fe: './src/sass/',
	src_js: './src/javascripts/',
	node_libs: ['./node_modules/foundation-sites/scss/', './node_modules/motion-ui/src'],
	};

var onError = function(err) {
	console.log(err);
}

// Clean
function clean() {
	return del( [paths.assets_css, paths.assets_js, paths.lang_file]);
}

// Vendors
function vendorStyles() {
  return gulp.src([ paths.src_css_fe + 'vendors.scss'])
	.pipe(plumber({errorHandler: onError}))
	//.pipe(sourcemaps.init())
	.pipe(sass({ includePaths : paths.node_libs, style: 'expanded', errLogToConsole: true }))
	.pipe(autoprefixer({ cascade: true }))
	.pipe(gulp.dest(paths.assets_css))
	.pipe(rename({ suffix: '.min' }))
	.pipe(cleancss())
	//.pipe(sourcemaps.write('.'))
	.pipe(gulp.dest(paths.assets_css))
	.pipe(notify({ message: 'Styles task complete: <%= file.relative %>!' }));
}

// Main CSS
function styles() {
  return gulp.src([paths.src_css_fe + 'style.scss'])
	.pipe(plumber({errorHandler: onError}))
	//.pipe(sourcemaps.init())
	.pipe(sass({ includePaths : paths.node_libs, style: 'expanded', errLogToConsole: true }))
	.pipe(autoprefixer({ cascade: true }))
	//.pipe(cleancss())
	//.pipe(sourcemaps.write('.'))
	.pipe(gulp.dest(paths.home))
	.pipe(notify({ message: 'Styles task complete: <%= file.relative %>!' }));
}

// Scripts
function scripts() {
  return gulp.src( paths.src_js + '*.js')
	.pipe(rigger())
	.pipe(gulp.dest(paths.assets_js))
	.pipe(rename({ suffix: '.min' }))
	.pipe(uglify())
	.pipe(gulp.dest(paths.assets_js))
	.pipe(notify({ message: 'Scripts task complete: <%= file.relative %>!' }));
}

// Copy Fonts
function copyFonts() {
	return gulp
	.src('./node_modules/@fortawesome/fontawesome-free/webfonts/*')
	.pipe(gulp.dest(paths.assets_font))
	//.pipe(notify({ message: 'Copy Fonts: <%= file.relative %>!' }));
}

// Vendor Scripts
function vendorScripts() {
	return gulp.src([
		//'./node_modules/fitvids.1.1.0/jquery.fitvids.js',
		'./node_modules/foundation-sites/dist/js/foundation.min.js',
		'./node_modules/foundation-sites/dist/js/foundation.js',
		//'./node_modules/foundation-sites/dist/js/foundation.min.js.map',
		'./node_modules/slick-carousel/slick/slick.min.js',
		'./node_modules/slick-carousel/slick/slick.js',
	  ])
	  .pipe(gulp.dest(paths.assets_js))
	  .pipe(notify({ message: 'Copy JavaScripts: <%= file.relative %>!' }));
}

// Pot File
function genPot() {
	return gulp
	.src('**/*.php')
	.pipe(wpPot( {
		domain: 'makenzie-lite',
		package: 'Makenzie Lite WordPress Theme',
		lastTranslator: 'Victor Tihai victor@wplook.com',
		team: 'WPlook Themes wplook.com'
	} ))
	.pipe(gulp.dest('languages/makenzie-lite.pot'))
	//.pipe(notify({ message: 'Generated -> Pot File!' }));
}

// Watch Function
function watch() {
	gulp.watch(paths.src_js, scripts);
	gulp.watch(paths.src_css_fe, styles);
	gulp.watch(paths.src_css_fe, vendorStyles);
}

var build = gulp.series(clean, gulp.parallel(styles, vendorStyles, scripts, copyFonts, vendorScripts, genPot));

exports.clean = clean;
exports.styles = styles;
exports.vendorStyles = vendorStyles;
exports.scripts = scripts;
exports.vendorScripts = vendorScripts;
exports.copyFonts = copyFonts;
exports.genPot = genPot;
exports.watch = watch;
exports.build = build;
exports.default = build;
