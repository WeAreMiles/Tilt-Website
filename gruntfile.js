module.exports = function(grunt) {

	// 1. All configuration goes here.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		uglify: {
			scripts: {
				src: 'js/main.js',
				dest: 'js/main.min.js'
			},
		},

		sass: {
			static_mappings: {
				options: {
					style: 'compressed'
				},
				files: {
					'css/global.min.css': 'sass/global.scss',
				}
			}
		},

		watch: {
			options: {
				livereload: true,
			},
			css: {
				files: ['wp-content/resources/sass/**/*.scss'],
				tasks: ['sass'],
				options: {
					spawn: false,
				},
			},

		}

	});

	// 3. Where we tell Grunt we plan to use this plug-in.
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
	grunt.registerTask('default', ['uglify',  'sass', 'watch']);


}
