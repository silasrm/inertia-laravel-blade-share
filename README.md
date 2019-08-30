# Provides data for common blade-directives from laravel to internia-vue

![Inertia Laravel Blade Share](http://api.devbar.ultrabold.de/github?text=Inertia.js%20Laravel%20Blade%20Share)

### Docs

* [Installation](#installation)
* [Implementing directives](#implementing-directives)
* [Using directives](#using-directives)

## Installation

~~~sh
composer require frogbob/inertia-laravel-blade-share
~~~

The package follows laravels package-autodiscover. So there is no need to initiate it in your app.php.

## Given data

For now following data will be shared with vue via inertia.js:

```auth``` Checks if user is authenticated | *Used in: auth, guest*

```csrf``` Shares csrf-token from session | *Used in: csrf*

```errors``` Shares error-bag | *Used in: error*

All given data are also globally available in vue via ```this.$page.KEY```

~~~js
this.$page.auth
this.$page.csrf
this.$page.errors
~~~
