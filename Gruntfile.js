/* jshint node:true */
module.exports = function( grunt ) {

	'use strict';

	// Load tasks.
	require('matchdep').filterDev('grunt-*').forEach( grunt.loadNpmTasks );

	// Project configuration.
	grunt.initConfig({

		// minifies SVGs
		svgmin: {
			options: {
				plugins: [{
					removeViewBox: false
				},{
					removeUselessStrokeAndFill: false
				}]
			},
			dist: {
				files: [{
					expand: true,
					cwd: 'icons/src',
					src: ['*.svg'],
					dest: 'icons/.tmp',
					ext: '.svg'
				}]
			}
		},

		svgstore: {
			options: {
				prefix: 'dashicons-',
				cleanup: ['fill','stroke'],
				svg: {
					xmlns: 'http://www.w3.org/2000/svg',
					'xmlns:xlink': 'http://www.w3.org/1999/xlink',
					viewBox: '0 0 20 20'
				}
			},
			dev: {
				files: {
					'icons/dashicons.svg': [ 'icons/.tmp/*.svg' ]
				}
			}
		},

		watch: {
			svg: {
				files: ['icons/src/**'],
				tasks: ['svgmin', 'svgstore']
			}
		}
	});

	// Default task.
	grunt.registerTask('default', ['svgmin', 'svgstore']);

};
