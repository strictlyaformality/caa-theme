const mix = require('laravel-mix');

mix
    .js('src/index.js', 'dist/js')
    .postCss('src/css/theme.css', 'dist/css', [
        require('postcss-nested'),
        require('tailwindcss')
    ])
    .options({
        processCssUrls: false
    });