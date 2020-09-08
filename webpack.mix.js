const mix = require("laravel-mix");
const CaseSensitivePathsPlugin = require("case-sensitive-paths-webpack-plugin");
var LiveReloadPlugin = require("webpack-livereload-plugin");

var webpackConfig = {
    plugins: [new CaseSensitivePathsPlugin(), new LiveReloadPlugin()],
    resolve: {
        extensions: [".js", ".json", ".vue"],
        alias: {
            "~": path.join(__dirname, "./resources/js")
        }
    }
};
mix.webpackConfig(webpackConfig);

mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);
