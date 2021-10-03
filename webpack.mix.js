const mix = require('laravel-mix');

mix
    .js('src/index.js', 'dist/js')
    .sass('src/scss/theme.scss', 'dist/css')
    .options({
        processCssUrls: false
    });