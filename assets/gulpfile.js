var gulp = require('gulp'),
sass = require('gulp-dart-sass'),
autoprefixer = require('gulp-autoprefixer'),
uglify = require('gulp-uglify'),
rename = require('gulp-rename'),
concat = require('gulp-concat'),
notify = require('gulp-notify'),
browserSync = require('browser-sync').create(),
cleanCSS = require('gulp-clean-css'),
postcss = require('gulp-postcss'),
assets  = require('postcss-assets');

const themePrefix = "dablueartist";

const srcSCSS = "./scss/style.scss";
const srcJSDir = "js";
const srcJSFiles = [
  `${srcJSDir}/vendors/bootstrap.bundle.js`,
  `${srcJSDir}/vendors/glide.min.js`,
  `${srcJSDir}/scripts/main.js`,
]
  ;
const destCSS = "css";
const destJS = "js";


//Javascript Combine and Minify
gulp.task('scripts', function() {
  return gulp.src(srcJSFiles)
    .pipe(concat(`${themePrefix}.js`))
    .pipe(gulp.dest(destJS))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest(destJS))
    .pipe(notify({ message: 'Scripts task complete' }));
});


//SCSS MINIFY AND COMBINE

gulp.task('compile-styles', function(){
  return gulp.src(srcSCSS)
  .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
  .pipe(autoprefixer('last 2 versions'))
  .pipe(rename(`${themePrefix}.css`))
  .pipe(cleanCSS('level: 1'))
  .pipe(gulp.dest(destCSS))
  .pipe(browserSync.stream())
  .pipe(notify({message: 'Styles task complete'}));
})

gulp.task('process-styles', function(){
  return gulp.src(`./css/${themePrefix}.css`)
  .pipe(postcss(
    [assets({
      loadPaths: ['./images/']
    })]
  ))
  .pipe(gulp.dest(destCSS))
})

//COMBINES STYLE PROCESSES
gulp.task('styles', gulp.series('compile-styles', 'process-styles'));

//BROWSER Sync
gulp.task('serve', function() {

  browserSync.init({
    proxy: `${themePrefix}.local`
  });

  gulp.watch(['./**/*.scss', '!./node_modules/', '!./.git'], gulp.series('compile-styles', 'process-styles'));
  
  gulp.watch(['./**/*.*', '!./node_modules/', '!./.git/', '!./**/*.scss', `!./${destCSS}/${themePrefix}.css`, `!./${destCSS}/${themePrefix}.min.css`]).on('change', browserSync.reload);
});

gulp.task('watch', function() {
  gulp.watch(['./**/*.scss', './js/scripts/*.js', '!./node_modules/', '!./.git/'], gulp.series('scripts', 'compile-styles', 'process-styles'));
});
