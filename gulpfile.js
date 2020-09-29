var gulp = require('gulp'),
  imagemin = require('gulp-imagemin'),
  clean = require('gulp-clean'),
  concat = require('gulp-concat'),
  htmlReplace = require('gulp-html-replace'),
  uglify = require('gulp-uglify'),
  browserSync = require('browser-sync').create(),
  babel = require("gulp-babel"),
  php = require('gulp-connect-php'),
  sass = require('gulp-sass');

// tarefa padrao que executa todo o resto

gulp.task('default', function() {

    // gulp.watch('public/img/**/*').on('change', function() {
    //   gulp.start('build-img');
    // });

    gulp.watch('dist/sass/*.scss').on('change', function() {
      gulp.start('sass');
      // gulp.start('sass');
    });

    gulp.watch('dist/js/*.js').on('change', function() {
      gulp.start('build-js');
      // gulp.start('build-js');
    });
});


// tarefa copy que duplica a pasta dist
gulp.task('sass', ['copy-sass'], function () {
     gulp.src('public/sass/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('public/css'));
});

gulp.task('copy-sass', ['clean-sass'], function() {
    return gulp.src('dist/sass/*.scss')
        .pipe(gulp.dest('public/sass'));
});

// tarefa clean que apaga a pasta clean
gulp.task('clean-sass', function() {
    return gulp.src('public/sass')
        .pipe(clean());
});


// tarefa build-js que minifica, concatena e transpila ES6 para ES5
gulp.task('build-js', ['copy-js'], function() {

      gulp.src("public/js/*.js")
      .pipe(babel({ presets: ["@babel/preset-env"] }))
      .pipe(concat('all.js'))
      .pipe(uglify())
      .pipe(uglify().on('error', function(e){
              console.log(e);
        }))
      .pipe(gulp.dest('public/js'));
});

gulp.task('copy-js', ['clean-js'], function() {
    return gulp.src('dist/js/*.js')
        .pipe(gulp.dest('public/js'));
});

// tarefa clean que apaga a pasta clean
gulp.task('clean-js', function() {
    return gulp.src('public/js')
        .pipe(clean());
});


// tarefa build-html que faz replace dos js para all.js
gulp.task('build-html', function() {
    gulp.src('app/View/**/*.php')
    .pipe(htmlReplace({
      js:'js/all.js'
    }))
    .pipe(gulp.dest('public'));
});

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: {
          target:'http://nutricionista.com.br:80'
        },
        host:'nutricionista.com.br',
        open: 'external',
        notify: true,
        files: [
          'dist/sass/**.scss',
          'dist/js/**.js',
          'app/**/*.php',
          'dist/index.php'
        ]
    });
});
