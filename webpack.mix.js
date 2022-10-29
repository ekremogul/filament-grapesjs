let mix = require("laravel-mix");

mix.js("resources/js/grapes.js","resources/dist/js")
    .sass(
        "resources/css/grapes.scss",
        "resources/dist/css",
    )
    .options({
        processCssUrls: false
    })
