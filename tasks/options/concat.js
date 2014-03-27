module.exports = {
  dist: {
      src: [
          'source/js/modernizr.min.js', //Modernizr
          'bower_components/sticky/jquery.sticky.js', //Sticky jQuery plugin
          'source/js/scripts/*.js'  // My js scripts
      ],
      dest: 'source/js/global.js',
    }
  }
