var gulp = require('gulp'),
    gutil = require('gulp-util'),
    notify = require('gulp-notify'),
    less = require('gulp-less'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    autoprefix = require('gulp-autoprefixer'),
    del = require('del'),
    jf = require('jsonfile'),
    fs = require('fs'),
    minifyCSS = require('gulp-minify-css');

var directory = {
    assets : 'app/assets',
    less: 'app/assets/less',
    bower: jf.readFileSync(__dirname + '/.bowerrc').directory,
    target: {
        css:   'public/css',
        js:    'public/js',
        fonts: 'public/fonts'
    }
};

gulp.task('clean', function (cb) {
    del([
        'public/css/*',
        'public/js/*',
        'public/fonts/*',
        '!public/css/.gitignore',
        '!public/js/.gitignore',
        '!public/fonts/.gitignore'
    ], cb);
});

gulp.task('jquery', function () {
    gulp.src(directory.bower + '/jquery/dist/jquery.min.js')
        .pipe(uglify({compress: false, mangle: false, preserveComments: false}))
        .pipe(gulp.dest(directory.target.js));
});

gulp.task('bootstrap', function () {
    gulp.src(directory.bower + '/bootstrap/dist/css/bootstrap.min.css')
        .pipe(gulp.dest(directory.target.css));
    gulp.src(directory.bower + '/bootstrap/dist/js/bootstrap.min.js')
        .pipe(gulp.dest(directory.target.js));
    var fontsDir = directory.bower + '/bootstrap/dist/fonts/';
    fs.readdir(fontsDir , function (err, files) {
        if (err) throw err;
        for (var i = 0; i < files.length; i++) {
          gulp.src(fontsDir + files[i]).pipe(gulp.dest(directory.target.fonts));
        }
    });
});

gulp.task('bootstrap:dtpicker', function () {
    var dp = directory.bower + '/eonasdan-bootstrap-datetimepicker/build/';
    gulp.src(dp + '/css/bootstrap-datetimepicker.min.css')
        .pipe(gulp.dest(directory.target.css));
    gulp.src(dp + '/js/bootstrap-datetimepicker.min.js')
        .pipe(gulp.dest(directory.target.js));
    gulp.src(directory.bower + '/moment/min/moment-with-locales.min.js')
        .pipe(gulp.dest(directory.target.js));
});

gulp.task('tagmanager', function () {
    gulp.src(directory.bower + '/tagmanager/tagmanager.css')
        .pipe(minifyCSS({keepBreaks:true}))
        .pipe(gulp.dest(directory.target.css));
    gulp.src(directory.bower + '/tagmanager/tagmanager.js')
        .pipe(uglify({compress: false, mangle: false, preserveComments: false}))
        .pipe(gulp.dest(directory.target.js));
});

gulp.task('custom', function() {
    gulp.src(directory.assets + '/custom/css/carousels.css')
        .pipe(minifyCSS({keepBreaks:true}))
        .pipe(gulp.dest(directory.target.css));
    gulp.src(directory.assets + '/custom/css/custom.css')
        .pipe(minifyCSS({keepBreaks:true}))
        .pipe(gulp.dest(directory.target.css));
    gulp.src(directory.assets + '/custom/js/carousels.js')
        .pipe(uglify({compress: false, mangle: false, preserveComments: false}))
        .pipe(gulp.dest(directory.target.js));
    gulp.src(directory.assets + '/custom/js/custom.js')
        .pipe(uglify({compress: false, mangle: false, preserveComments: false}))
        .pipe(gulp.dest(directory.target.js));
});

gulp.task('default', ['jquery', 'bootstrap', 'bootstrap:dtpicker', 'tagmanager', 'custom']);
