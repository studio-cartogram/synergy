module.exports = {
  entry: "./assets/js/main.js",
  output: {
    filename: "../../synergy/assets/js/main.js"
  },
  resolve: {
    alias: {
      waypoints: "waypoints/lib/noframework.waypoints.js"
    }
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader"
        }
      }
    ]
  }
};
