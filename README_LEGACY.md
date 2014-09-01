Turbolinks for Laravel 4.1+
===========================

## Installation with the old fashion way

NOTE: You should use the [new way](README.md#with-the-larasset-package) to get the assets always up to date.

### Without the [Larasset](https://github.com/efficiently/larasset) package

Add Composer scripts for automatic publication of assets

```json
{
   "scripts": {
       "post-install-cmd": [
           "php artisan asset:publish --path=\"vendor/helthe/turbolinks/Resources/public/js\" efficiently/turbolinks"
       ],
       "post-update-cmd": [
           "php artisan asset:publish --path=\"vendor/helthe/turbolinks/Resources/public/js\" efficiently/turbolinks"
       ]
   }
}
```

Add Javascript files into your project

#### Usage

Using turbolinks requires both the usage of the javascript library and the event listeners included with the component.

##### Using turbolinks.js

To enable turbolinks, all you need to do is add the compiled turbolinks javascript to your layout in the `<head>`section.

##### Using jquery.turbolinks

If you need to use jquery.turbolinks, you need to add it before `turbolinks.js`
