var path = require('path');
var webpack = require('webpack-stream').webpack;

// utils
var deepMerge = require('../utils/deepMerge');

// config
var overrides = require('../../config/scripts');
var assets = require('./common').paths.assets;

/**
 * Script Building
 * Configuration
 * Object
 *
 * @type {{}}
 */
module.exports = deepMerge({
	paths: {
		watch: assets.src + '/js/**/*.js',
		src: [
			assets.src + '/js/*.js',
			'!' + assets.src + '/js/**/_*'
		],
		dest: assets.dest + '/js',
		clean: assets.dest + '/js/**/*.{js,map}'
	},

	options: {
		webpack: {

			// merged with defaults
			// for :watch task
			watch: {
				cache: true,
				watch: true,
				devtool: 'eval',
			},

			// merged with defaults
			// for :dev task
			dev: {
				devtool: 'eval'
			},

			// merged with defaults
			// for :prod task
			prod: {
				plugins: [
					new webpack.optimize.UglifyJsPlugin({
						sourceMap: false,
						comments: false,
						screw_ie8: true,
						compress: {
							drop_console: true,
							unsafe: true,
							unsafe_comps: true,
							screw_ie8: true,
							warnings: false
						}
					})
				],
			},
			defaults: {
				output: {
					chunkFilename: 'chunk-[name].js'
				},
				stats: {
					colors: true
				},
				module: {
					rules: [
						{
							test: /\.jsx?$/,
							exclude: /node_modules/,
							use: {
								loader: 'babel-loader',
								options: {
									presets: ['es2015', 'stage-2'],
									plugins: ['transform-runtime'],
								}			
							},
						},
					],
				},
			}
		}
	}
}, overrides);
