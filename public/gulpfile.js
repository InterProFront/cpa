var gulp         = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps   = require('gulp-sourcemaps'),
    less         = require('gulp-less'),
    cssmin       = require('gulp-cssmin'),
    concat       = require('gulp-concat'),
    csscomb      = require('gulp-csscomb'),
    htmllint     = require('gulp-htmllint'),
    csslint      = require('gulp-stylelint'),
    cssfmt       = require('gulp-stylefmt'),
    plumber      = require('gulp-plumber'),
    watch        = require('gulp-watch'),
    livereload   = require('gulp-livereload'),
    svgmin       = require('gulp-svgmin'),
    rename       = require('gulp-rename'),
    imagemin     = require('gulp-imagemin'),
    changeCase   = require('change-case'),
    gutil        = require('gulp-util'),
    _if          = require('gulp-if');


var dev_css        = 'dev/less/',
    dev_img        = 'dev/img/',
    production_css = './css/',
    production_img = './img/',
    html           = '../resources/views/front/';

var image_ext = '{png,Png,PNG,jpg,Jpg,JPG,jpeg,Jpeg,JPEG,gif,Gif,GIF,bmp,BMP,Bmp}';
//======================================================================================================================
//Компиляция и обработка LESS
//======================================================================================================================
gulp.task('style', function () {
    gulp.src(dev_css + '*.less')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie9', 'opera 12.1', 'chrome', 'ff', 'ios'))
        .pipe(csscomb())
        .pipe(cssmin())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(production_css))
        .pipe(livereload())
});

//======================================================================================================================
//Валидация LESS и HTML
//======================================================================================================================
gulp.task('lint:less', function () {
    gulp.src(dev_css + '**/*.less')
        .pipe(plumber())
        .pipe(cssfmt())
        .pipe(csscomb())
        .pipe(csslint())
});

gulp.task('lint:html', function () {
    return gulp.src(html + '**/*.blade.php')
               .pipe(htmllint({
                   config: './dev/config/.htmllintrc'
               }, htmllintReporter));
});
//======================================================================================================================
// Функция "Репортер" для HTML линтера
//======================================================================================================================
function htmllintReporter(filepath, issues) {
    if (issues.length > 0) {
        issues.forEach(function (issue) {
            gutil.log(gutil.colors.cyan('[gulp-htmllint] ') + gutil.colors.white(filepath + ' [' + issue.line + ',' + issue.column + ']: ') + gutil.colors.red('(' + issue.code + ') ' + issue.msg));
        });

        process.exitCode = 1;
    }
}


//======================================================================================================================
//Оптимизация изображений
//======================================================================================================================
gulp.task('image', function () {
    gulp.src(dev_img + '**.' + image_ext)
        .pipe(plumber())
        .pipe(imagemin({
            progressive      : false,
            interlaced       : true,
            optimizationLevel: 7
        }))
        .pipe(rename(function (path) {
            path.basename = changeCase.lowerCase(path.basename);
            path.extname  = changeCase.lowerCase(path.extname);
        }))
        .pipe(gulp.dest(production_img))
        .pipe(livereload());

    gulp.src(dev_img + '*.svg')
        .pipe(plumber())
        .pipe(svgmin())
        .pipe(rename(function (path) {
            path.basename = changeCase.lowerCase(path.basename);
            path.extname  = changeCase.lowerCase(path.extname);
        }))
        .pipe(gulp.dest(production_img))
        .pipe(livereload());

});

//======================================================================================================================
//Ватчеры файлов
//======================================================================================================================

gulp.task('watch',function(){
    livereload.listen();
    gulp.watch(dev_img+'*.*',{cwd: './'},['image']);
    gulp.watch(dev_css+'/*.less',{cwd:'./'},['style']);
    gulp.watch(dev_css+'/**/*.less',{cwd:'./'},['style']);
});
