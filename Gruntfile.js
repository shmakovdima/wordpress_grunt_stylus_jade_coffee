module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-stylus');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.initConfig({ pkg: grunt.file.readJSON('package.json'), });
}
