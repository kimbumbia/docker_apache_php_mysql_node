var gulp = require('gulp')
    , concat = require('gulp-concat')
    , terser = require('gulp-terser')
;

gulp.task('js', function () {
    return gulp.src([
        '/usr/src/app/script.js'
    ])
        .pipe(concat('compressed.js'))
        .pipe(terser())
        .pipe(gulp.dest('/usr/src/app/public'));

});
/**
 * Runs all tasks
 */
gulp.task('run', gulp.parallel(
    'js'
));