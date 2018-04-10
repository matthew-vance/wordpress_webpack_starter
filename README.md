# WordPress Webpack Starter
### A foundation for WordPress theme development using Webpack.

## Setup
This guide assumes you have a running instance of Wordpress already. If you don't, check out my [local WordPress stack repository](https://github.com/mavance/wordpress_local) if you'd like to get started using Docker for local WordPress development.

### Install dependencies
Run `npm install`

### Configure Browsersync
Change the proxy configuration option for the BrowserSync Webpack plugin in webpack.config.js to the URL of the instance of WordPress you are developing against. Browser sync will then proxy this URL and autorefresh the site when it detects changes.

### Find/Replace Theme Naming
Replace all instances of the string 'webpackstarter' in .php files with the name of your theme.

## Commands
### Watch
Run `npm run watch` to start Webpack in watch mode. This will open a browser window and Webpack will look for changes in your files and rebuild on save. Browsersync will detect changes in your dist folder and your .php files and refresh your browser automatically.

### Build
Run `npm run build` and webpack will bundle your scripts and styles and place them in the dist folder. The theme is preconfigured to load these files into the site.
