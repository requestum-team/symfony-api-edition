'use strict';

require('dotenv').config();

let gulp = require('gulp');
let replace = require('gulp-replace');
let del = require('del');
let docsBuilder = require('api-console-builder');

let path = {
    build: {
        spec: './../web/docs/spec/',
        web: './../web/docs/sandbox/'
    },
    src: {
        spec: './spec/**/*'
    }
};

gulp.task('clean', function (cb) {
    return del([
        path.build.spec + '**/*',
        path.build.web + '**/*'
    ], {
        'force': true
    });
});

gulp.task('build-spec', ['clean'], function (cb) {
    return gulp.src(path.src.spec)
        .pipe(replace('{{ BASE_URI }}', process.env.API_BASE_URI))
        .pipe(gulp.dest(path.build.spec))

});

gulp.task('build-sandbox', function (cb) {
    docsBuilder({
        src: 'node_modules/api-console',
        dest: path.build.web,
        raml: path.build.spec+'api.raml',
        useJson: true,
        verbose: true,
        noOptimization: true
    }).then(function () {
        cb();
    }).catch(function () {
        cb('docs app build failed');
    });
});

gulp.task('build', ['clean', 'build-spec', 'build-sandbox']);
