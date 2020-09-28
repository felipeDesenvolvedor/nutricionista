var gulp = require('gulp'),
  imagemin = require('gulp-imagemin'),
  clean = require('gulp-clean'),
  concat = require('gulp-concat'),
  htmlReplace = require('gulp-html-replace'),
  uglify = require('gulp-uglify'),
  browserSync = require('browser-sync').create(),
  babel = require("gulp-babel"),
  php = require('gulp-connect-php');

// tarefa padrao que executa todo o resto
// gulp.task('default', ['copy'], function(){
//   gulp.start('build-img', 'build-js', 'build-html');
// });


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

gulp.task('php', function() {
    return php.server({ base: './', port: 80, keepalive: true});
});

gulp.task('browser-sync', function() {
  return browserSync.init({
        proxy: {
          target:'http://nutricionista.com.br:80',
          proxyReq: [
            function(proxyReq) {
              proxyReq.setHeader('X-Special-Proxy-Header', 'foobar');
            }
          ],
          proxyRes: [
            function(proxyRes, req, res) {
                console.log(proxyRes.headers);
            }
          ]
        },
        host:'nutricionista.com.br',
        open: 'external',
        notify: true,
        files: [
          'public/css/**.css',
          'public/js/**.js',
          'app/**/*.php',
          'public/index.php',
          '.htaccess'
        ]
    });
});
