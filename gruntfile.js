module.exports = function(grunt) {
grunt.config.init({
	pkg: grunt.file.readJSON('package.JSON'),
	concat: {
		option: {
			banner:'/*! JS concat <%= grunt.template.today("dddd, mmmm dS, yyyy, h:MM:ss TT")%> */\n',
			separator: ';'
		},
		basic: {
			src: '<%= pkg.jsSrcDir %>/global/*.js',
			dest: '<%= pkg.jsDestDir %>/software-database-global.js'
		}
	},
	uglify: {
		options: {
			banner:'/*! JS uglify <%= grunt.template.today("dddd, mmmm dS, yyyy, h:MM:ss TT")%> */\n'
		},
		build: {
			src: '<%= pkg.jsDestDir %>/software-database-global.js',
			dest: '<%= pkg.jsDestDir %>/software-database-global.min.js'
		}
	},
	cssmin: {
		options: { 
			banner: '/*! CSS Build - <%= grunt.template.today("dddd, mmmm dS, yyyy, h:MM:ss TT")%> */\n'
		},
		minify: {
			expand: true,
			cwd: '<%= pkg.styleDestDir %>/',
			src: ['*.css', '!*.min.css'],
			dest: '<%= pkg.styleDestDir %>/',
			ext: '.min.css'
	  }
	},
	sass: {
		dist: {
			/*options: {
				style: 'compressed'
			},*/
			files: [{
				expand: true,
				cwd: '<%= pkg.styleSrcDir %>',
				src: ['*.scss'],
				dest: '<%= pkg.styleDestDir %>',
				ext: '.css'
			}]
		}
	},
	watch: {
		/*scripts: {
			files: ['<%= pkg.jsSrcDir %>/global/*.js'],
			tasks: ['concat','uglify'],
			options: {
				spawn: false,
			},
			
		},*/
		css:{
			files: ['<%= pkg.styleSrcDir %>/*.scss'],
			tasks: ['sass',/*'cssmin',*/'copy']
		}
	}
	,copy:{
		main: {
			files:[
				{
					expand:true
					,flatten: true
					,src: [
						[
							'<%= pkg.styleDestDir %>/style.css'
							,'<%= pkg.styleDestDir %>/ie-l9.css'
						]
					]
					,dest: 'F://sites/serviceteam/wp-content/themes/serviceteam/'
					,filter: 'isFile'

				}
			]
		}
	}
	,autoprefixer: {
		options: {
			browsers: ['last 2 versions', '> 1%', 'ie 7', 'ie 8', 'ie 9']
		},
		dist: {
			files: [{
				expand: true,
				cwd: '<%= pkg.styleDestDir %>',
				src: '*.css',
				dest: '<%= pkg.styleDestDir %>'
			}]
		}
	},

});
grunt.loadNpmTasks('grunt-autoprefixer');
grunt.loadNpmTasks('grunt-contrib-copy');
grunt.loadNpmTasks('grunt-contrib-concat');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-cssmin');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-contrib-compass');
grunt.loadNpmTasks('grunt-contrib-sass');

grunt.registerTask('default', [/*'concat','uglify',*/'sass'/*,'cssmin'*/,'copy','watch']);

};