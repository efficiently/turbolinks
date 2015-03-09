Turbolinks for Laravel 5.0
==========================

## Installation with the old fashion way

NOTE: You should use the [new way](README.md#with-the-larasset-package) to get the assets always up to date.

### Without the [Larasset](https://github.com/efficiently/larasset/tree/1.0) package

Run this script for automatic publication of assets after each update.

```bash
php artisan vendor:publish --provider="Efficiently\Turbolinks\TurbolinksServiceProvider" --force
```

Add Javascript files into your project

#### Usage

Using turbolinks requires both the usage of the javascript library and the event listeners included with the component.

##### Using turbolinks.js

To enable turbolinks, all you need to do is add the compiled turbolinks javascript to your layout in the `<head>`section.

##### Using jquery.turbolinks

If you need to use jquery.turbolinks, you need to add it before `turbolinks.js`
