module.exports = function (grunt) {
	
grunt.initConfig({  
 
	csso: {
	  compress: {
		options: {
		  report: 'gzip'
		},
		files: {
		  'prod/css/style.min.css': ['dev/css/jquery.fancybox.css', 'dev/css/lightSlider.css',  'dev/css/lightGallery.css',  'dev/css/jquery.nouislider.min.css', 'dev/libs/font-awesome/css/font-awesome.css','dev/css/style.css'],
		  'prod/css/header.min.css': ['dev/css/meta.css'],
		}
	  }
	},

	autoprefixer: {
		single_file: {
			src: 'prod/css/style.min.css',
			dest: 'prod/css/style.min.css'
		}  
	},

	jshint: {
		options: {jshintrc: true},
		all: 'dev/js/common.js'
	},

	uglify: {
	  my_target: {
		files: {
			'prod/js/scripts.min.js': [
			'dev/libs/jquery/dist/jquery.min.js',
			'dev/libs/bootstrap-sass/assets/javascripts/bootstrap.js',
			'dev/libs/bootstrap-material-design/dist/js/material.min.js',
			'dev/libs/bootstrap-material-design/dist/js/ripples.min.js',
			'dev/js/modernizr.custom.js',
			'dev/js/jquery.lightSlider.min.js',
			'dev/js/lightGallery.js',
			'dev/js/jquery.fancybox.pack.js',
			'dev/js/helpers/jquery.fancybox-thumbs.js',
			'dev/js/jquery.mousewheel-3.0.6.pack.js',
			'dev/js/jquery.nouislider.all.min.js',
			'dev/js/floating-labels.js',
			'dev/js/jquery.blindify.min.js',
			'dev/js/ScrollMagic.min.js',
			'dev/js/debug.addIndicators.min.js',
			'dev/js/TweenMax.min.js', 
			'dev/js/animation.gsap.js',
			'dev/js/cbpFWTabs.js',
			'dev/js/dev.proekty-domov.js',
			'dev/js/dev.dizayn.js',
			'dev/js/dev.raschet-gazobetona.js',
			'dev/js/dev.homepage.js',
			'dev/js/scripts.js',
			'dev/js/common.js']
		}
	  }
	},

	fixmyjs: {
		options: {
		  config: 'dev/.jshintrc', 
		  indentpref: 'spaces'
		},
		test: {
		  files: [
			{src: ['dev/js/common.js'], dest: 'dev/js/common.js', ext: '.js'}
		  ]
		}
	},

	copy: {
		main: {files: [{expand: true, cwd: 'dev/', src: ['**/*.php', '**/*.svg', 'config.php', '.htaccess'], dest: 'prod/'},
				{expand: true, cwd: 'dev/libs/**/fonts', src: ['**'], dest: 'prod/fonts'},{expand: true, cwd: 'dev/libs/font-awesome/fonts/', src: ['**'], dest: 'prod/fonts'}]
		}
	},

	htmlmin: {
	  dist: {
		options: {
			removeComments: true,
			collapseWhitespace: true
		  },
		files: [{                                   
			expand: true,
			cwd: 'prod/',
			src: ['**/*.php', '*.php', '!config.php', '!**/var.php', '!var.php', '!**/array.php', '!array.php', '!email.php'],
			dest: 'prod/'     
		}]
	  }
	},

	watch: {
		html: {
			files: ['*.html','*/*.html', '!dist/*.html', '!release/*.html'],
			tasks: ['includereplace', 'processhtml']
		},
		css: {
			files: ['css/*.css'],
			tasks: ['cssmin']
		}
	},

	processhtml: {
	  dev:{
		options: {
			process: true,
		},
		files: [{
			expand: true,     
			cwd: 'dev/',   
			src: ['blocks/meta.php', 'blocks/footer.php'],
			dest: 'prod/'  
		}]
	  }  
	},

	wiredep: {
	  task: {
		src: ['dev/blocks/meta.php'],
		options: {}
	  }
	},

	critical: {
		test: {
			options: {
				base: './',
				css: ['prod/css/style.min.css'],
				width: 1600,
				height: 1500
			},
			files: [{                                   
				expand: true,
				cwd: 'prod/',
				src: ['index.html'],
				dest: 'prod/'
			}]
		}
	},

	imagemin: {
		dynamic: {
		  files: [{
			expand: true,
			cwd: 'dev/',
			src: ['**/*.{png,jpg,gif,JPG}','!libs/*.{png,jpg,gif,JPG}'],
			dest: 'prod/'
		  }]
		}
	},
	postcss: {
      options: {
        processors: [
          
          require('cssgrace'),
        ]
      },
      dist: {
        src: ['prod/css/style.min.css'],
        dest: 'prod/css/style.min.css'
      }
    }
	

});

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-include-replace');
    grunt.loadNpmTasks('grunt-processhtml');
//    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-csso');
    grunt.loadNpmTasks('grunt-wiredep');
    grunt.loadNpmTasks('grunt-critical');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-fixmyjs');
    grunt.loadNpmTasks('grunt-uncss');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-csslint');
    
    grunt.registerTask('default', ['copy', 'processhtml', 'htmlmin']);
    grunt.registerTask('all', ['csso', 'autoprefixer','uglify','copy', 'processhtml', 'htmlmin']);
    grunt.registerTask('css', ['csso', 'autoprefixer']);
	grunt.registerTask('js', ['uglify']);
	grunt.registerTask('php', ['copy', 'processhtml', 'htmlmin']);
    grunt.registerTask('img', ['imagemin']);
	  
};