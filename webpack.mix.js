const mix = require('laravel-mix');

mix.styles([
    'resources/css/normalize.css',
    'resources/css/flexboxgrid.css',
    'resources/css/animate.css',
    'resources/css/style.css'
], 'public/css/app.css')
    .options({
        processCssUrls: false
    })
    .version();
