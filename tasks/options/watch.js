module.exports = {
  options: {
    livereload: true,
  },
  scripts: {
    files: ['source/js/*.js', 'source/js/*/*.js'],
    tasks: ['jshint', 'concat', 'uglify'],
    options: {
      spawn: false,
    }
  },
  css: {
    files: ['source/scss/*.scss','source/scss/*/*.scss'],
    tasks: ['sass', 'autoprefixer', 'cssmin'],
    options: {
      spawn: false,
    }
  },
  images: {
    files: ['assets/img/**/*.{png,jpg,gif}', 'images/*.{png,jpg,gif}'],
    tasks: ['imagemin'],
    options: {
      spawn: false,
    }
  },
  php:{
    files: ['**/*.php'],
    tasks: [],
    options: {
      spawn: false
    }
  }
}