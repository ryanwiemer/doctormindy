module.exports = {
  dist: {
    options: {
      // cssmin will minify later
      style: 'expanded'
    },
    files: {
      'source/css/style.css': 'source/scss/style.scss'
    }
  }
}
