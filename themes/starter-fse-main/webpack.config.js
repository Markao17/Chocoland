const path = require("path"),
  removeEmptyScriptsPlugin = require("webpack-remove-empty-scripts"),
  webpackConfig = require("@wordpress/scripts/config/webpack.config");

// Extend the @wordpress webpack config and add the entry points.
module.exports = {
  ...webpackConfig,
  ...{
    mode: "production",
    devServer: {
      allowedHosts: ".local",
      static: {
        directory: path.join(__dirname, "assets"),
      },
      client: {
        overlay: false,
      },
      open: ["http://wyperformance-challenge.local"], // Change this to your local dev URL.
      hot: false,
      compress: true,
      devMiddleware: {
        writeToDisk: true,
      },
    },
    context: path.resolve(__dirname, "assets"),
    entry: ["./main.js", "./main.scss"],
    plugins: [
      // Include @wordpress plugins config.
      ...webpackConfig.plugins,
      new removeEmptyScriptsPlugin({
        stage: removeEmptyScriptsPlugin.STAGE_AFTER_PROCESS_PLUGINS,
      }),
    ],
  },
};
