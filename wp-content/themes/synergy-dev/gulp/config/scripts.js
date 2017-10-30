/**
 * Override the Default
 * Core Scripts
 * Config
 *
 */
var webpack = require('webpack');

module.exports = {
  options: {
    webpack: {
      defaults: {
        resolve: {
					alias: {
						'waypoints': 'waypoints/lib/noframework.waypoints.js'
          }
        }
      }
    }
  }
};
