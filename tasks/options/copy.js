module.exports = {
  main: {
    files: [

    {expand: true, src: ['source/fonts/*'], dest: 'assets/fonts/', filter: 'isFile', expand: true,  flatten: true,},
    {expand: true, src: ['source/img/*'], dest: 'assets/img/', filter: 'isFile', expand: true,  flatten: true,}

    ]
  }
}