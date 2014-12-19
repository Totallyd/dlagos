module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

		
		//
		// SASS 
		// ====================
		//		
		sass: {                              
			dist: {                            
				options: {                       
					style: 'compressed'
				},
				files: {                         
					'liabilities/css/styles.css': 'raw/scss/style.scss'
				}
			}
		},

		
		//
		// ImageMin
		// ====================
		//
		imagemin: {                          
	      dynamic: {                         
	        files: [{
	          expand: true,                  
	          cwd: 'raw/images/',             
	          src: ['**/*.{png,jpg,gif}'],  
	          dest: 'liabilities/images'          
	        }]
	      },
	      dynamic2x: {                        
	        files: [{
	          expand: true,                 
	          cwd: 'raw/images/@2x/',               
	          src: ['**/*.{png,jpg,gif}'],   
	          dest: 'liabilities/images/@2x'          
	        }]
	      }
	    },


		//
		// Contact
		// ====================
		//
		concat: {
			options: {
				separator: ';',
			},
			dist: {
				src: ['raw/scripts/plugins.js', 'raw/scripts/main.js'],
				dest: 'raw/scripts/scripts.js',
			},
		},

		
		//
		// Uglify
		// ====================
		//
		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' + '<%= grunt.template.today("yyyy-mm-dd") %> */',
			},
			target: {
				files: {
					'liabilities/scripts/scripts.min.js': ['raw/scripts/scripts.js']
				}
			}
		},

		//
		// Styledocco
		// ====================
		//
		styledocco: {
			dist: {
				options: {
					name: 'My Project'
				},
				files: {
					'documentation': 'raw/documentation/**/*.css'
				}
			}
		},

		//
		// HTML-min
		// ====================
		// 
		htmlmin: {                                     
			dist: {                                      
				options: {                                 
					removeComments: true,
					collapseWhitespace: true
				},

				files: {                                   
					'index.html': 'raw-index.html',
					'member.html': 'raw-member.html',
					'get-membership.html': 'raw-getmembership.html',
					'registration.html': 'raw-registration.html',
					'forgotpassword.html': 'raw-forgotpassword.html',
					'resetpassword.html': 'raw-resetpassword.html',
					'welcome.html': 'raw-welcome.html',
					'companyprofile.html': 'raw-companyprofile.html',
					'editprofile.html': 'raw-editprofile.html',
					'manage.html': 'raw-manage.html',
					'add-faq.html': 'raw-addfaq.html',
					'manageportfolio.html': 'raw-manageportfolio.html',
					'manageemployee.html': 'raw-manageemployee.html',
					'dashboard.html': 'raw-dashboard.html',
					'admindashboard.html': 'raw-admindashboard.html',
					'adminlogin.html': 'raw-adminlogin.html',
					'faq.html': 'raw-faq.html'
				}
			},			
		},		


		//
		// Watch
		// ====================
		//
		watch: {
			css: {
				files: ['raw/scss/**/*.scss'],
				tasks: ['sass'],
				options: {
					livereload: true
				},
			},
			
			img: {
				files: ['raw/images/**/*.{png,jpg,gif}'],
				tasks: ['imagemin'],
				options: {
					spawn: false,
				},
			},
			
			concat:{
				files: ['raw/scripts/plugins.js', 'raw/scripts/main.js'],
				tasks:['concat']
			},

			uglify:{
				files: ['raw/scripts/scripts.js'],
				tasks:['uglify']
			},

			
			cssdoc: {
                files: ["raw/documentation/**/*.css", 'README.md'],
                tasks: ["styledocco"]
            }
            
		}	
   
  });

  
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-styledocco');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-htmlmin');
	grunt.loadNpmTasks('grunt-contrib-watch');
  
  grunt.registerTask('default', ['sass', 'imagemin', 'concat', 'uglify', 'htmlmin', 'styledocco', 'watch']);

};