module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    //
    //─── WATCH ──────────────────────────────────────────────────────
    // Defines tasks to be run when files are changed.

    watch: {
      js: {
        files: ['resources/assets/js/*.js'],
        tasks: ['newer:babel', /*'newer:browserify',*/ 'notify:done'],
      },
      css: {
        files: ['resources/assets/scss/*.scss', 'resources/assets/sass/*.scss'],
        tasks: ['sass', 'notify:done'],
      },
    },

    //
    //─── SASS ───────────────────────────────────────────────────────
    // Compiles and minifies SCSS files. Also generates a sourcemap.

    sass: {
      min: {
        options: {
          style: 'compressed',
        },
        files: {
          'public/css/p4.min.css': 'resources/assets/scss/main.scss',
        },
      },
    },

    //
    //─── BROWSERIFY ────────────────────────────────────────────
    // Allows use of node's require method to bundle node-modules.
    // Also compiles ES6+ to ES5 using Babel.

    browserify: {
      dev: {
        src: ['src/js/main.js'],
        dest: 'dist/js/project-name.min.js',
        options: {
          gruntLogHeader: false,
          browserifyOptions: { debug: true },
          transform: [
            [
              'babelify',
              {
                presets: ['env'],
                plugins: [
                  [
                    'transform-runtime',
                    {
                      polyfill: false,
                      regenerator: true,
                    },
                  ],
                ],
              },
            ],
            'uglifyify',
          ],
        },
      },
    },

    //
    //─── BABEL ──────────────────────────────────────────────────
    // Compile ES6+ to ES5

    babel: {
      options: {
        sourceMap: 'inline',
        presets: ['env'],
        minified: true,
      },
      dist: {
        files: {
          'public/js/p4.min.js': 'resources/assets/js/main.js',
        },
      },
    },

    //
    //─── NOTIFY ───────────────────────────────────────────
    // Notifies you when all tasks have completed.

    notify: {
      done: {
        options: {
          gruntLogHeader: false,
          title: 'project-name - grunt',
          message: 'build complete ✅✅✅',
        },
      },
    },

    //
    //─── CACHE BREAKER ──────────────────────────────────────────────────
    // Cache busts external CSS & JS by appending a timestamp query string
    // to html tag links.

    cachebreaker: {
      dev: {
        options: {
          match: ['app_content-channel.min.js', 'app_content-channel.min.css'],
        },
        files: {
          src: ['dist/index.html'],
        },
      },
    },
  });

  //
  //─── LOAD TASKS ────────────────────────────────────────────────────────────────────
  // Load grunt tasks from node_modules.
  require('grunt-log-headers')(grunt);
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-import');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-browserify');
  grunt.loadNpmTasks('grunt-babel');
  grunt.loadNpmTasks('grunt-cache-breaker');
  grunt.loadNpmTasks('grunt-notify');
  grunt.registerTask('default', ['watch']);
};
