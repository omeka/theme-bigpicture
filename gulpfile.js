// var gulp = require('gulp');
//
// gulp.task('css', function() {
//     var sass = require('gulp-sass');
//     var postcss = require('gulp-postcss');
//     var autoprefixer = require('autoprefixer');
//
//     return gulp.src('./css/sass/*.scss')
//         .pipe(sass({
//             outputStyle: 'nested',
//             includePaths: ['../../node_modules/susy/sass']
//         }).on('error', sass.logError))
//         .pipe(postcss([
//             autoprefixer({browsers: ['> 5%', '> 5% in US', 'last 2 versions']})
//         ]))
//         .pipe(gulp.dest('./css'));
// });
//
// gulp.task('css:watch', function() {
//     gulp.watch('./css/sass/*.scss', gulp.parallel('css'));
// });

'use strict';

const path = require('path');
const gulp = require('gulp');
const gutil = require('gulp-util');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const express = require('express');

const PORT = process.env.PORT || '8000';

// If moving assets to a sub-directory, change '.' to that sub-directory.
// e.g. 'assets', or 'public/assets'.
const ASSETS_DIR = path.join(__dirname, '.');

sass.compiler = require('node-sass');

gulp.task('sass', () => {
  return gulp.src(`${ASSETS_DIR}/sass/**/*.scss`)
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write())
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest(`${ASSETS_DIR}/css`));
});

gulp.task('sass:watch', () => {
  gulp.watch(`${ASSETS_DIR}/sass/**/*.scss`, ['sass']);
});

gulp.task('watch', ['default', 'sass:watch'], done => {
  const app = express();

  app.use(express.static(__dirname));
  app.listen(PORT, () => {
    gutil.log(`Development server listening at`, gutil.colors.green(`http://localhost:${PORT}`));
    done();
  });
});

gulp.task('default', ['sass']);
