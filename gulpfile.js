var gulp = require('gulp');
// var sass = require('gulp-sass');
var uglifycss = require('gulp-uglifycss');



// gulp.task('sass',function(){
//     return gulp.src('.scss/**/*.scss')
//     .pipe(sass().on('error',sass.logError))
//     .pipe(gulp.dest('./css'));
// });

gulp.task('css', function () {
    gulp.src('./*.css')
    .pipe(uglifycss({
        // "maxLineLen":80,
        "uglyComments": true
    }))
    .pipe(gulp.dest('./dist'));
});

gulp.task('run',['css']);
gulp.task('watch', function () {
    gulp.watch('./*.css',[css]);
});

gulp.task('default',['run' , 'watch']);
