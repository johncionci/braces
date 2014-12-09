# Braces

Braces is a starter theme that is meant for getting development teams up and running on WordPress projects quickly. Braces is derived from [Automattic _s project] (https://github.com/Automattic/_s). _s which is truly fantastic. As you'll likely notice, much of the core beliefs behind _s will be reflected in this project as well.

However, we did make some changes to suit our business needs, which we hope you'll find helpful as well. Some of the new features you can find are [Sass] (http://sass-lang.com) integration, file and structure clean up, and most noticeably, the PHP syntax. Typically any new additions should have README.md docs for their explanations.

Pull requests are welcome!

## Why Braces?

Braces alters the typical WP PHP loop syntax for a more [PHP coding standards] (http://make.wordpress.org/core/handbook/coding-standards/php/) friendly approach that uses more, well, "braces".

## Technologies

### Sass
Website: [http://sass-lang.com/](http://sass-lang.com/)

### Gulp
Website: [http://gulpjs.com/](http://gulpjs.com/)

### Susy
Website: [http://susy.oddbird.net/](http://susy.oddbird.net/)

### Compass
Website: [compass-style.org](compass-style.org)

## Support
This theme supports modern browsers - so IE9+. If you project requires IE8 support their are options availble to help with that.

[Modernizr.js](modernizr.com) is used for feature detection. It also ships with html5shiv.js which enables HTML5 elements in IE.

[Respond.js](https://github.com/scottjehl/Respond) is a library that allows IE6-8 to read media queries which is essential since we are using a grid system. This should only be loaded conditionally if you are trying to support those browsers.

[Pixrem](https://github.com/gummesson/gulp-pixrem) is a Gulp plugin that is used to convert REM units into pixels for IE fallbacks.

Getting Started
---------------

If you want to set things up manually, download `braces` from GitHub. The first thing you want to do is copy the `braces` directory and change the name to something else - Like, say, `megatherium` -- then you'll need to do a three-step find and replace on all of the templates.

* Search for: `* @author Oomph, Inc.` and replace with: `* @author { Your Company }`
* Search for: `* @link http://www.oomphinc.com` and replace with: `* @link { Your URL }`
* Search for: `braces` and replace with: `megatherium`

Don't forget to update the core style.css with your own information.
Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!