var gulp = require('gulp');
var	less = require('gulp-less');
var	watch = require('gulp-watch');
var	prefix = require('gulp-autoprefixer');
var	plumber = require('gulp-plumber');
var	livereload = require('gulp-livereload');
var minifycss = require('gulp-minify-css');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var del = require('del');
var spritesmith = require('gulp.spritesmith');

// DEVELOPMENT

gulp.task('less', function() {
    return gulp.src('./css/common.less')
        .pipe(plumber())
        .pipe(less())
        .pipe(prefix("last 8 version", "> 1%", "ie 8", "ie 7"), { cascade:true })
        .pipe(gulp.dest('./css'))
        .pipe(livereload());
});

gulp.task('js-reload', function() {
    return gulp.src('./js/*.js')
        .pipe(livereload());
});

gulp.task('html-reload', function() {
    return gulp.src('./index.html')
        .pipe(livereload());
});

gulp.task('sprite', function () {
  var spriteData = gulp.src('./img/sprite/*.*').pipe(spritesmith({
    imgName: 'sprite.png',
    cssName: '../css/sprite.less'
  }));
  return spriteData.pipe(gulp.dest('./img'));
});


gulp.task('watch', function() {
	livereload.listen();

    gulp.watch('./css/*.less', ['less']);

    gulp.watch('./js/*.js', ['js-reload']);

    gulp.watch('./*.html', ['html-reload']);
});

gulp.task('default', ['watch']); // Default will run the 'entry' watch task


// PRODUCTION BUILD

gulp.task('clean', function() {
    return del(['./dist']);
});

gulp.task('js', function(){
    return gulp.src([
            './bower_components/jquery/dist/jquery.min.js',
            './bower_components/bootstrap/dist/js/bootstrap.min.js',
            './js/app.js'
        ])
        .pipe(concat('app.js'))
        .pipe(gulp.dest('./dist/js'))
        .pipe(rename('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./dist/js'));
});

gulp.task('css', function() {
    return gulp.src('./css/common.less')
        .pipe(plumber())
        .pipe(less({compress: true}))
        .pipe(prefix("last 8 version", "> 1%", "ie 8", "ie 7"), { cascade:true })
        .pipe(gulp.dest('./dist/css'));
});

gulp.task('cssmin', function(){
    return gulp.src([
            './bower_components/bootstrap/dist/css/bootstrap.min.css',
            './dist/css/common.css'
        ])
        .pipe(concat('common.css'))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss())
        .pipe(gulp.dest('./dist/css'));
});

gulp.task('images', function() {
  return gulp.src('./img/*')
    .pipe(imagemin({ optimizationLevel: 2, progressive: true, interlaced: true }))
    .pipe(gulp.dest('dist/img'));
});

gulp.task('fonts', function() {
  return gulp.src('./fonts/*')
    .pipe(gulp.dest('dist/fonts'));
});


gulp.task('build', ['clean'], function() {
    gulp.start('js', 'css', 'cssmin', 'images', 'fonts');
});


















