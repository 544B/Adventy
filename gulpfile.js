var gulp = require('gulp'),
	$ = require('gulp-load-plugins')(),
	sass = require('gulp-ruby-sass'),
	localIP = 'localhost';  // View Sever Other PC

/*
 * Default Tasks
 */
// http server
gulp.task('webserver', function() {
	gulp.src('./app')
	.pipe($.webserver({
		open: true,
		host: localIP,
		port: 8000,
		livereload: true,
		directoryListing: false,
		fallback: 'index.html'
    }));
});

// Validate HTML
gulp.task('hint', function() {
	gulp.src('./app/{,**/}*.html')
		.pipe($.htmlhint())
		.pipe($.htmlhint.reporter())
		.pipe($.htmlhint.failReporter())
		.on('error', $.notify.onError(function(error) {
			return error.message;
		}));
});

// Compile Sass
gulp.task('css', function() {
	return gulp.src('./scss/{,**/}*.scss')
		.pipe($.plumber())
		.pipe(sass({
			style : 'expanded',
			lineNumbers : false
		}))
		.on('error', function(error) {
			$.notify().write(error.message);
		})
		.pipe($.pleeease({
			fallbacks: {
				autoprefixer: ['last 4 versions', 'ie 8', 'ie 9'],
				rem: false
			},
			optimizers: {
				minifier: false
			}
		}))
		.pipe($.cssbeautify({
			indent: '\t',
			openbrace: 'end-of-line',
			autosemicolon: false
		}))
		.pipe(gulp.dest('./app/css/'));
});

// Watch Files
gulp.task('watch',function(){
	gulp.watch(['./app/{,**/}*.html'],['hint']);
	gulp.watch(['./scss/{,**/}*.scss'],['css']);
});


// Set Defalt
gulp.task('default', ['webserver', 'css', 'watch']);
