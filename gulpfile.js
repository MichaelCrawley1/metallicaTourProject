const gulp = require('gulp');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');

const browserSync = require('browser-sync').create();


// first thing we want to do is complie sass into css

function style() {

    //my post css processors i want to use

    const processors = [
        autoprefixer()


    ];



    // 1. Where is my sass file

    return gulp.src('./sass/**/*.scss')
        // 2. Pass that file through the sas compiler 
        .pipe(sass().on('error', sass.logError))
        // 3. Where do i save the complied css? 


        .pipe(postcss(processors))



        .pipe(gulp.dest('./css'))
        // 4. stream changes to all browsers.  

        .pipe(browserSync.stream());


}

function watch() {

    browserSync.init({



        proxy: "http://localhost:8888/metallicaTourProject",
        port: 8887


    });
    gulp.watch('./sass/**/*.scss', style);
    gulp.watch('./*.php').on('change', browserSync.reload);
    gulp.watch('./js/**/*.js').on('change', browserSync.reload);
   

}

//here we call the style fucntion

exports.style = style;
exports.watch = watch;