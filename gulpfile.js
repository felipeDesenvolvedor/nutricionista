var gulp = require('gulp'),
  imagemin = require('gulp-imagemin'),
  clean = require('gulp-clean'),
  concat = require('gulp-concat'),
  htmlReplace = require('gulp-html-replace'),
  uglify = require('gulp-uglify'),
  browserSync = require('browser-sync'),
  babel = require("gulp-babel");

// tarefa padrao que executa todo o resto
gulp.task('default', ['copy'], function(){
  gulp.start('build-img', 'build-js', 'build-html');
});


// tarefa copy que duplica a pasta dist
gulp.task('copy', ['clean'], function() {
    return gulp.src('dist/**/*')
        .pipe(gulp.dest('public'));
});


// tarefa clean que apaga a pasta clean
gulp.task('clean', function() {
    return gulp.src('public')
        .pipe(clean());
});


// tarefa build-img que otimiza as imagens
gulp.task('build-img', function() {

  gulp.src('public/img/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest('public/img'));
});


// tarefa build-js que minifica, concatena e transpila ES6 para ES5
gulp.task('build-js', function() {

      gulp.src("public/**/*.js")
      .pipe(babel({ presets: ["@babel/preset-env"] }))
      .pipe(concat('all.js'))
      .pipe(uglify())
      .pipe(uglify().on('error', function(e){
              console.log(e);
        }))
      .pipe(gulp.dest('public/js'));
});


// tarefa build-html que faz replace dos js para all.js
gulp.task('build-html', function() {
    gulp.src('app/View/**/*.php')
    .pipe(htmlReplace({
      js:'js/all.js'
    }))
    .pipe(gulp.dest('public'));
});


// tarefa que ouve alteracoes nos arquivos e reflete na pagina automaticamente
gulp.task('server', function() {
    browserSync.init({
        server: {
            baseDir: 'public'
        }
    });

    gulp.watch('public/**/*').on('change', browserSync.reload);
  });
