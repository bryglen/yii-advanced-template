module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        less: {
            dev: {
                files: {
                    "themes/frontend/css/style.css": "themes/frontend/less/*.less"
                }
            },
            prod: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2,
                    report: 'gzip'
                },
                files: {
                    "themes/frontend/css/style.min.css": "themes/frontend/less/*.less"
                }
            }
        },
        uglify: {
            // parent options
            options: {
                interrupt: true
            },

            dev: {
                options: {
                    beautify: true,
                    banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
                        '<%= grunt.template.today("yyyy-mm-dd") %> */\n'
                },
                files: {
                    'themes/frontend/js/all.js': [
                        'themes/frontend/js/*.js',
                        '!themes/frontend/js/all*.js',
                    ]
                }
            },

            prod: {
                options: {
                    compress: true
                },

                files: {
                    'themes/frontend/js/all.min.js': [
                        'themes/frontend/js/*.js',
                        '!themes/frontend/js/all*.js',
                    ]
                }
            }
        },

        watch: {
            files: ['themes/frontend/js/*.js', 'themes/frontend/less/*.less'],
            tasks: ['uglify', 'less']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('default', ['less']);
    grunt.registerTask('development', ['less:dev']);
    grunt.registerTask('production', ['less:prod']);
}