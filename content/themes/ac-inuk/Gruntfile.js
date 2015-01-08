module.exports = function (grunt) {

  // 1. All configuration goes here
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
      css: {
        files: 'assets/scss/**/*.scss',
        tasks: ['sass'],
        options: {
          livereload: true
        }
      },
      svg: {
        files: 'assets/images/svg/icons/*.svg',
        tasks: ['svgstore']
      }
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
          'assets/css/style.css': ['assets/css/style.css']
        }
      }
    },
    autoprefixer: {
      build: {
        expand: true,
        cwd: 'assets/css',
        src: ['**/*.css'],
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
    sass: {// Task
      dist: {// Target
        options: {// Target options
          style: 'expanded'
        },
        files: {// Dictionary of files
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
    },
    svgstore: {
      options: {
        svg: {
          style: "display:none"
        },
        prefix: 'icon-', // This will prefix each ID
        svg: {// will be added as attributes to the resulting SVG
          viewBox: '0 0 100 100'
        }
      },
      default: {
        files: {
          'assets/images/defs.svg': ['assets/images/svg/icons/*.svg']
        }
        //your_target: {

      }
    }//svgstore

  });

  // 3. Where we tell Grunt we plan to use this plug-in.
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-svgstore');


  // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
  grunt.registerTask('default', ['compass', 'autoprefixer', 'cssmin']);

};