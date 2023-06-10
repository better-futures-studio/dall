# This is a fork of [laravel-frontend-presets/tall](https://github.com/laravel-frontend-presets/tall) that uses daisyUI.

Using daisyUI, you can [easily change the theme of your app](https://daisyui.com/docs/themes/). You can also use the theme switcher component to allow your users to change the theme of your app on the fly.

# Laravel DALL Preset

[![CI Status](https://github.com/better-futures-studio/dall/actions/workflows/tests.yml/badge.svg)](https://github.com/better-futures-studio/dall/actions)
[![Total Downloads](https://poser.pugx.org/better-futures-studio/dall/d/total.svg)](https://packagist.org/packages/better-futures-studio/dall)

A front-end preset for Laravel to scaffold an application using the DALL stack, jumpstarting your application's development.

If you're not familiar with the name, it's an acronym that describes the main technologies involved in the stack:

-   [daisyUI](https://daisyui.com)
-   [Alpine.js](https://alpinejs.dev)
-   [Laravel](https://laravel.com)
-   [Livewire](https://laravel-livewire.com)

![Login View](./demo.gif)

Some notable features of this package include:

-   Views extending a default layout
-   Front-end assets like daisyUI and Alpine.js compiled with Vite 3
-   daisyUI-powered pagination views
-   A theme switcher is provided as a blade component.
-   By default all the daisyUI themes are enabled. You can disable them in the `tailwind.config.js` file.

## Installation

This preset is intended to be installed into a fresh Laravel application. Follow [Laravel's installation instructions](https://laravel.com/docs/installation) to ensure you have a working environment before continuing.

### Installation (without auth)

Then simply run the following commands:

```bash
composer require livewire/livewire better-futures-studio/dall
php artisan ui dall
npm install
npm run dev
```

### Installation (with auth)

If you would like to install the preset and its auth scaffolding in a fresh Laravel application, make sure to use the `--auth` flag on the `ui` command:

```bash
composer require livewire/livewire better-futures-studio/dall
php artisan ui dall --auth
npm install
npm run dev
```

Some notable features of the authentication scaffolding include:

-   Powered by Livewire components and single action controllers
-   Bundled with pre-written tests

All routes, components, controllers and tests are published to your application. The idea behind this is that you have full control over every aspect of the scaffolding in your own app, removing the need to dig around in the vendor folder to figure out how things are working.

## Removing the package

If you don't want to keep this package installed once you've installed the preset, you can safely remove it. Unlike the default Laravel presets, this one publishes all the auth logic to your project's `/app` directory, so it's fully redundant.

### A note on pagination

If you are using pagination, you set the default pagination views to the ones provided in the `boot` method of a service provider:

```php
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Paginator::defaultView('pagination::default');

        Paginator::defaultSimpleView('pagination::simple-default');
    }
}
```

## Credits

-   [Abdel Elrafa](https://github.com/AbdelElrafa)

### The original [laravel-frontend-presets/tall](https://github.com/laravel-frontend-presets/tall) package credits:

-   [Dan Harrin](https://github.com/DanHarrin)
-   [Liam Hammett](https://github.com/imliam)
-   [Ryan Chandler](https://github.com/ryangjchandler)
-   [Tailwind UI](https://tailwindui.com) for the default authentication and pagination views
-   [All Contributors](../../contributors)
