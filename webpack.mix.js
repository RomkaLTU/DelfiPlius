let mix = require('laravel-mix');
let tailwind = require('tailwindcss');
let build = require('./tasks/build.js');

require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', '!source/**/_tmp/*']),
    ]
});

mix.options({
    autoprefixer: {},
    postCss: [
        require('postcss-import'),
        tailwind('tailwind.config.js'),
        require('postcss-nested'),
    ]
}).postCss('source/_assets/css/dp-main.css', 'css/dp-main.css')
    .js('source/_assets/js/main.js', 'js')
    .purgeCss({
        folders: ['source'],
    })
    .version();