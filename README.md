DEPRECATED
==========

In favor of the **original repository [Frenzy Turbolinks](https://github.com/frenzyapp/turbolinks/tree/1.0-dev)**, who merged my changes :+1:

Turbolinks for Laravel 4.1+
===========================

Turbolinks is a port of the Rails [turbolinks](https://github.com/rails/turbolinks)
and the [jquery.turbolinks](https://github.com/kossnocorp/jquery.turbolinks) gems
for projects using the PHP [Laravel](http://laravel.com) 4.1+ framework.

## Versions

Current versions of the following JavaScript libraries are used:

 * turbolinks: v2.4.0
 * jquery.turbolinks: v2.1.0

For [**Laravel 5.0**](http://laravel.com/docs/5.0) supports see [Turbolinks 1.0 branch](https://github.com/efficiently/turbolinks/tree/1.0)

## Performance

Turbolinks makes following links in your web application faster. Instead of letting
the browser recompile the JavaScript and CSS between each page change, it keeps
the current page instance alive and replaces only the body and the title in the head.

Performance improvements will vary depending on the amount of CSS and Javascript
you are using. You can get up to a 2X increase when using a lot of Javascript and
CSS. You can find the Rails benchmarks [here](https://stevelabnik/turbolinks_test).

## Installation

### Using [Composer](https://getcomposer.org)

Add the following in your `composer.json`:

```json
{
    "require": {
        // ...
        "efficiently/turbolinks": "dev-master"
    }
}
```

Run this command in a terminal:
```bash
composer update efficiently/turbolinks
```

Add `'Efficiently\Turbolinks\TurbolinksServiceProvider', ` to the `providers` array in `app/config/app.php`
**after** [Larasset](https://github.com/efficiently/larasset) one (if you have installed this package).

### With the [Larasset](https://github.com/efficiently/larasset) package

If you have installed the [Larasset](https://github.com/efficiently/larasset) package:

The `turbolinks.js` and `jquery.turbolinks.js` files will be added to the asset pipeline and available for you to use.

Add these lines in your `app/assets/javascripts/application.js` file, in this order:

```js
//= require jquery
//= require jquery.turbolinks
//= require jquery_ujs
//
// ... your other scripts here ...
//
//= require turbolinks
```

Then if the `<head>`section of your main layout.

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- ... -->
        {{ stylesheet_link_tag('application', ['data-turbolinks-track' => true]) }}
        {{ javascript_include_tag('application', ['data-turbolinks-track' => true]) }}
    </head>
    <!-- ... -->
</html>
```

### Without the Larasset package (legacy method)

Click [here](README_LEGACY.md) to publish the assets manually.

## Compatibility

The turbolinks javascript is designed to work with any browser that fully supports
pushState and all the related APIs. This includes Safari 6.0+ (but not Safari 5.1.x!),
IE10+, and latest Chrome and Firefox.

Do note that existing JavaScript libraries may not all be compatible with
Turbolinks out of the box due to the change in instantiation cycle. You might
very well have to modify them to work with Turbolinks' new set of events. For
help with this, check out the [Turbolinks Compatibility project](http://reed.github.io/turbolinks-compatibility).

## Additional Resources

Please refer to the [turbolinks](https://github.com/rails/turbolinks) and
[jquery.turbolinks](https://github.com/kossnocorp/jquery.turbolinks) projects
if you require additional information on the javascript libraries and their usage.

## Bugs

For bugs or feature requests, please [create an issue](https://github.com/efficiently/turbolinks/issues/new).

## Credits

This package is a fork of [Frenzy Turbolinks](https://github.com/frenzyapp/turbolinks) repository.

Which is based on the Symfony middleware package [Helthe Turbolinks](https://github.com/helthe/Turbolinks).

Many thanks to them!
