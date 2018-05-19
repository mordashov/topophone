const gulp = require('gulp');
const browserSync = require('browser-sync').create();

/* -------- Server  -------- */
gulp.task('server', function() {
    browserSync.init({
        server: {
            port: 9000,
            baseDir: "."
        },
        browser: "chrome"
    });

    gulp.watch("index.html").on('change', browserSync.reload);
    gulp.watch("css/*.css").on('change', browserSync.reload);

    //gulp.task('watch', function () {
    //    gulp.watch('*.css', ['server']);
    //    gulp.watch('*.html', ['server']);
    //}).on('change', browserSync.reload);
});