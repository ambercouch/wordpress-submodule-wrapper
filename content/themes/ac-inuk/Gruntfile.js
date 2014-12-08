module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            css: {
              files: 'assets/scss/**/*.scss',
              tasks: ['sass'],
              options: {
                livereload: true,
              },
            },
          },
        compass: {
             dist: {
               options: {
                 sassDir: 'assets/scss',
                 cssDir: 'assets/css'
               },

             }
           },
        cssmin: {
            build: {
              files: {
                'assets/css/style.css': [ 'assets/css/style.css' ]
              }
            }
        },
        autoprefixer: {
          build: {
            expand: true,
            cwd: 'assets/css',
            src: [ '**/*.css' ],
            dest: 'assets/css'
          }
        },
        concat: {
         options: {
            separator: ';',
          },
          dist: {
            src: ['assets/vendor/jquery/dist/jquery.min.js'],
            dest: 'assets/js/script.js',
          },
        },
        sass: {                              // Task
          dist: {                            // Target
            options: {                       // Target options
              style: 'expanded'
            },
            files: {                         // Dictionary of files
              'assets/css/style.css': 'assets/scss/style.scss'      // 'destination': 'source'

            }
          }
        },
        uglify: {
          my_target: {
            files: {
              'assets/js/plugins.js': ['assets/vendor/vegas/dist/jquery.vegas.js']
            }
          }
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-autoprefixer');


    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['compass','autoprefixer', 'cssmin']);

};