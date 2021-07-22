const path = require("path");
const ServiceWorkerWebpackPlugin = require("serviceworker-webpack-plugin");

module.exports = {
  outputDir: path.resolve(__dirname, "dist"),
  assetsDir: "static",
  configureWebpack: {
    plugins: [
      new ServiceWorkerWebpackPlugin({
        entry: path.join(__dirname, "./src/service-worker.js")
      })
    ]
  }
}