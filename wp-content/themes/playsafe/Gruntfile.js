module.exports = function(grunt) {
  // Project configuration.
  grunt.initConfig({
    // Metadata.
    pkg: grunt.file.readJSON('package.json'),
    copy: {
      main: {
        files: [


        ],
      },
    },
  });

  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.registerTask('copy', ['copy']);

};

module.exports = function (grunt) {

  // Package configuration
  grunt.initConfig({

    // Metadata
    pkg: grunt.file.readJSON('package.json'),

    //Copy files
    copy: {
      main: {
        files: [
          // Bootstrap SCSS and JS
          {expand: true, flatten: true, src: ['node_modules/bootstrap/scss/*'], dest: 'src/scss/bootstrap/'},
          {expand: true, flatten: true, src: ['node_modules/bootstrap/scss/mixins/*'], dest: 'src/scss/bootstrap/mixins/'},
          {expand: true, flatten: true, src: ['node_modules/bootstrap/scss/utilities/*'], dest: 'src/scss/bootstrap/utilities/'},
          {expand: true, flatten: true, src: ['node_modules/bootstrap/dist/js/bootstrap.min.js'], dest: 'assets/js/'},
          // Fontawesome SCSS and Fonts
          {expand: true, flatten: true, src: ['node_modules/font-awesome/scss/*'], dest: 'src/scss/font-awesome/'},
          {expand: true, flatten: true, src: ['node_modules/font-awesome/fonts/*'], dest: 'assets/fonts/'},
          //Slick Slider SCSS and JS
          {expand: true, flatten: true, src: ['node_modules/slick-carousel/slick/slick.scss'], dest: 'src/scss/slick/'},
          {expand: true, flatten: true, src: ['node_modules/slick-carousel/slick/slick.min.js'], dest: 'assets/js/'},
          // jQuery
          {expand: true, flatten: true, src: ['node_modules/jquery/dist/jquery.min.js'], dest: 'assets/js/'},
        ],
      }
    }

  });

  // Load the plugin that provides the "copy" task.
  grunt.loadNpmTasks('grunt-contrib-copy');

  // Default task(s).
  grunt.registerTask('default', ['copy']);
};
