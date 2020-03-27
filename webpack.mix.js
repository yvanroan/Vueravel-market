const config = require('./webpack.config');
const mix = require('laravel-mix');
require('laravel-mix-eslint');

function resolve(dir) {
  return path.join(
    __dirname,
    '/resources/js',
    dir
  );
}

Mix.listen('configReady', webpackConfig => {
  // Add "svg" to image loader test
  const imageLoaderConfig = webpackConfig.module.rules.find(
    rule =>
      String(rule.test) ===
      String(/(\.(png|jpe?g|gif|webp)$|^((?!font).)*\.svg$)/)
  );
  imageLoaderConfig.exclude = resolve('icons');
});

mix.webpackConfig(config);

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js('resources/js/app.js', 'public/js')  
  .extract(['vue'])
  .options({
    processCssUrls: false,
  })
  .sass('resources/sass/app.scss', 'public/css/app.css', {
    implementation: require('node-sass'),
    outputStyle: 'compressed'
  })
  .options({
    postCss: [
      require('postcss-css-variables')(),
      require('autoprefixer')()
    ]
  }).sourceMaps();

  //done by me
  mix.version(["public/bulma/bulma.css"]);
  mix.version(["public/font-awesome/css/font-awesome.min.css"]);
  //

if (mix.inProduction()) {
  mix.version();
  mix.disableNotifications();
} else {

	// https://browsersync.io/docs/options
	mix.browserSync({
	    proxy: {
		    target: process.env.APP_URL,
		}
	});

	if (process.env.VUERAVEL_USE_ESLINT === 'true') {
		mix.eslint();
	}

	// Development settings
	mix
	  .sourceMaps()
	  .webpackConfig({
	  	devtool: 'cheap-eval-source-map', // Fastest for development
	  });
}

