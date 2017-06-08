var gulp         = require('gulp');
var less         = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS     = require('gulp-clean-css');
var gutil        = require('gulp-util');
var concat       = require('gulp-concat');  
var rename       = require('gulp-rename');  
var uglify       = require('gulp-uglify');  
var browserSync  = require('browser-sync').create();
var imagemin     = require('gulp-imagemin');
var pngquant     = require('imagemin-pngquant');

var sourcePath = 'assets/less';
var targetPath = 'css/';
var jsSourcePath = 'assets/js/**/*.js';
var jsTargetPath = 'js/';
var websitePath = 'Base%20Template';
 
gulp.task('less', function (done) {

  return gulp.src([sourcePath + '/template.less'])
    .pipe(less({compress: true}).on('error', function(error) { done(error); }))
    .pipe(autoprefixer('last 20 versions', 'ie 9'))
    .pipe(cleanCSS({keepBreaks: false}))    
    .pipe(gulp.dest(targetPath))    
    .pipe(browserSync.stream());

});

gulp.task('js', function() {

  return gulp.src(jsSourcePath)
    .pipe(concat('scripts.js'))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest(jsTargetPath))
    .pipe(browserSync.stream());

});

// Livereload will up local server 
// and inject all changes made
gulp.task('browser-sync', function() {
  
  browserSync.init({
    proxy: "localhost/" + websitePath + "/",
    // browser: ["chrome", "firefox", "opera", "safari"] // useful for multibrowser testing
  });

  gulp.watch(sourcePath + '/**/*.less', ['less']);
  gulp.watch(jsSourcePath, ['js']).on('change', browserSync.reload);

});

// watch for changes in LESS and JS files. 
// run the appropriate task when changes detected and then refresh the browser
gulp.task('default', ['browser-sync']);


// compress images
gulp.task('imagemin', function () {
    return gulp.src('./images/uncompressed/**/*')
        .pipe(imagemin({
            progressive: true,
            use: [pngquant()]
        }))
        .pipe(gulp.dest('./images/'));
});


// gulp.task('default', ['clean'], function() {
//     gulp.start('watch', 'scripts', 'images');
// });