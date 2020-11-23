const mix = require("laravel-mix");
const CaseSensitivePathsPlugin = require("case-sensitive-paths-webpack-plugin");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
var webpackConfig = {
    plugins: [new CaseSensitivePathsPlugin()],
    resolve: {
        extensions: [".js", ".json", ".vue"],
        alias: {
            "~": path.join(__dirname, "./resources/js")
        }
    }
};

mix.webpackConfig(webpackConfig);
mix.options({
    hmrOptions: {
        host: "localhost", // site's host name
        port: 8080
    }
});

mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);
