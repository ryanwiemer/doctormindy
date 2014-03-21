module.exports = {
  dist: {
      src: [
          'bower_components/sticky/jquery.sticky.js', //Sticky jQuery plugin
          'bower_components/jquery-waypoints/waypoints.min.js', //Waypoints jQuer Plugin
          'source/js/scripts/*.js'  // My js scripts
      ],
      dest: 'source/js/global.js',
    }
  }
