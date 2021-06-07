var gulp = require('gulp');
var sass = require ('gulp-sass');
var uglifycss = require('gulp-uglifycss');
var rename = require ("gulp-rename");
var babel = require ("gulp-babel");
var uglify = require("gulp-uglify");


// sass compiler
gulp.task('sass',done =>{
    gulp.src('scss/style.scss')
        .pipe(sass())
        .pipe(gulp.dest('src/dev-saved'))
        // .pipe(gulp.dest('dist'))
    done()
});


//css Minifier
gulp.task('css', done => {
    gulp.src('src/dev-saved/style.css')
        .pipe(uglifycss({
            "uglyComments": true
        }))
        .pipe(rename({
            suffix:'.min'
        }))
        .pipe(gulp.dest('dist'))
    done()
});

//javascript Transpiler > es5
gulp.task('js', done => {
    gulp.src('src/JS/app.js')
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(rename({
            suffix:'.es5'
        }))
        .pipe(gulp.dest('src/dev-saved'))
    done()
});

//JS Uglify es5

gulp.task('js-min', done => {
    gulp.src('src/dev-saved/app.es5.js')
        .pipe(uglify())
        .pipe(rename({
            suffix:'.min'
        }))
        .pipe(gulp.dest('dist'))
    done()
});

// JS Uglify es6
gulp.task('js6-min', done => {
    gulp.src('src/JS/app.js')
        .pipe(uglify())
        .pipe(rename({
            suffix:'.es6.min'
        }))
        .pipe(gulp.dest('dist'))
    done()
});

//Watch
// run in this order
/**
 * ['sass', 'css', 'js', 'js-min', js6-min']
 */

gulp.task('watch',() =>{
    // gulp.watch('index.html', gulp.series('html'));
    gulp.watch(`scss/**/*.scss`, gulp.series('sass'));
    // gulp.watch('src/dev-saved/**/*.css', gulp.series('postcss'))
    gulp.watch('src/**/*.css', gulp.series('css'));
    gulp.watch('src/app.js',gulp.series('js'));
    gulp.watch('src/dev-saved/app.es5.js',gulp.series('js-min'));
    gulp.watch('src/app.js',gulp.series('js6-min'));
})

// To start watching type ' gulp watch ' 