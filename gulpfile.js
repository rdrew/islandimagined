var gulp = require("gulp"),
  sass = require("gulp-sass"),
  browserSync = require("browser-sync").create(),
  runSequence = require("run-sequence"),
  del = require("del"),
  glob = require("glob"),
  autoprefixer = require("gulp-autoprefixer"),
  importer = require('node-sass-globbing'),
  sourcemaps = require('gulp-sourcemaps'),
  imagemin = require('gulp-imagemin'),
  sassLint = require('gulp-sass-lint');
//neat = require('bourbon-neat').includePaths,
//bourbon = require('bourbon').includePaths;

//############################
//Edit these paths and options
//############################

//name of the drupal theme:
var _themeName = "islandimagined";

//url of the remote site
var _url = "https://islandimagined.dev.islandarchives.ca/";

//path to the themes assets (compiled css, js, imgs) dir
//var _path = "/themes/orion/build";
var _path = "/sites/islandimagined.dev.islandarchives.ca/themes/islandimagined/build";

//make sure the 2 Dirs are correct
var config = {
  remoteURL: _url,
  srcDir: "./src",
  injectDir: "./build",
  //localPath: _path,
  //localPath: "/localpath",
  localPath: "/build",

  localAssets: {
    css: [
      "css/**/*.css"
    ],
    js: [
      "js/**/*.js"
    ]
  }

};

var sass_config = {

  importer: importer,

  includePaths: [
    //'node_modules'
    //'node_modules/breakpoint-sass/stylesheets/',
    //'node_modules/singularitygs/stylesheets/',
    //'node_modules/compass-mixins/lib/',
    //'node_modules/bourbon/app/assets/stylesheets/',
    //'node_modules/bourbon-neat/app/assets/stylesheets/'
    'node_modules/foundation-sites/scss'
  ]


};

var targetCss = _themeName + ".styles.css";

// ##################
// Clean Task
// ##################

gulp.task("clean", function() {
  return del.sync(config.injectDir);
});

// ##################
// Sass Development Task
// ##################

gulp.task("sass_dev", function() {
  //this gets stuff in subfolders also and i dont want that atm
  ////return gulp.src(config.srcDir + "/styles/scss/**/*.scss")
  return gulp.src(config.srcDir + "/sass/*.scss")
    .pipe(sourcemaps.init())
    .pipe(sass(sass_config).on("error", sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9', 'and_chr >= 2.3']
    }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(config.injectDir + "/css"))
    .pipe(browserSync.stream());
});

// ##################
// Sass Production Task
// ##################

gulp.task("sass_prod", function() {
  //this gets stuff in subfolders also and i dont want that atm
  ////return gulp.src(config.srcDir + "/styles/scss/**/*.scss")
  return gulp.src(config.srcDir + "/sass/*.scss")
    .pipe(sourcemaps.init())
    .pipe(sass(sass_config).on("error", sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9', 'and_chr >= 2.3']
    }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(config.injectDir + "/css"))
    .pipe(browserSync.stream());
});

// ##################
// Images Task
// ##################

gulp.task('images', function() {
  return gulp.src(config.srcDir + '/img/**/*')
  //pipe through image_min
    .pipe(imagemin())
    .pipe(gulp.dest(config.injectDir + '/img'))
});


// ##################
// JS Task
// ##################

gulp.task("js", function() {
  return gulp.src(config.srcDir + "/js/**/*.js")
    .pipe(gulp.dest(config.injectDir + "/js"))
    .pipe(browserSync.stream());
});


// ##################
// Browsersync Task
// ##################

gulp.task("browserSync", ["sass_dev", "js"], function() {

  browserSync.init({
        proxy: _url,
        //port: browserSyncPort,
        logLevel: 'debug',
        serveStatic: ['.'],
        startPath: "user",
        //open: false,
        injectChanges: true,
        files: ['build/css/islandimagined.styles.css', 'build/js/islandimagined.behaviors.js'],
        plugins: ['bs-rewrite-rules'],
        rewriteRules: [
            {
                match: '/sites/islandimagined.dev.islandarchives.ca/themes/islandimagined/build/css/islandimagined.styles.css',
                replace: '/build/css/islandimagined.styles.css'
            },
            {
                match: '/sites/islandimagined.dev.islandarchives.ca/themes/islandimagined/build/js/islandimagined.behaviors.js',
                replace: '/build/js/islandimagined.behaviors.js'
            }
        ]

  });
});


// ##################
// Watch Task
// ##################

gulp.task("watch", ["browserSync", "js", "images", "sass_dev"], function() {
  gulp.watch(config.srcDir + "/sass/**/*.scss", ["sass_dev"]);
  gulp.watch(config.srcDir + "/img/**/*", ["images"]);
  gulp.watch(config.srcDir + "/js/**/*.js", ["js"]);
});

// ##################
// Build Task
// ##################

gulp.task("build", function() {
  runSequence([
    "clean",
    "sass_dev",
    "js",
    "images"
  ]);
});

// ##################
// Default Task
// ##################

gulp.task("default", function() {
  runSequence(["build", "browserSync", "watch"]);
});
