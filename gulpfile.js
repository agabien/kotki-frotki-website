const {
    src,
    dest,
    series,
    watch
} = require('gulp');

// styles
const scss = require('gulp-sass')(require('sass'));
const autoPrefixer = require('gulp-autoprefixer');
const cssMinify = require('gulp-clean-css');

function styles() {
    return src('./build/sass/main.scss')
        .pipe(scss())
        .pipe(autoPrefixer('last 2 versions'))
        .pipe(cssMinify())
        .pipe(dest('./dist/css/'))
}

// scripts
const jsMinify = require('gulp-terser');

function scripts() {
    return src('./build/scripts/**/*.js')
        .pipe(jsMinify())
        .pipe(dest('./dist/scripts/'))
}

function watchTask() {
    watch(
        [
            './build/sass/**/*.scss',
            './build/scripts/**/*.js'
        ],
        series(styles, scripts)
    )
}

exports.default = series(styles, scripts, watchTask);