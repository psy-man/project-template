'use strict';

import gulp from 'gulp';
import babel from 'gulp-babel';
import less from 'gulp-less';
import sourcemaps from 'gulp-sourcemaps';
import concat from 'gulp-concat';
import autoprefixer from 'gulp-autoprefixer';
import del from 'del';
import {create as bsCreate} from 'browser-sync';

const browserSync = bsCreate();

const paths = {
    scripts: ['./scripts/**/*.js'],
    styles: ['./styles/**/*.less']
};

gulp.task('styles', () =>
     gulp.src("./styles/common.less")
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(autoprefixer())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./build'))
        .pipe(browserSync.stream())
);

gulp.task('scripts', () =>
    gulp.src(paths.scripts)
        .pipe(sourcemaps.init())
        .pipe(babel())
        .pipe(concat('app.js'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./build'))
);


gulp.task('watch', ['scripts', 'styles'], () => {

    browserSync.init({
        server: {
            baseDir: "./"
        }
    });

    gulp.watch("./styles/*.less", ['styles']);
    gulp.watch("./scripts/**/*.js", ['scripts']).on('change', browserSync.reload);
    gulp.watch("./index.html").on('change', browserSync.reload);
});

gulp.task('default', ['watch']);