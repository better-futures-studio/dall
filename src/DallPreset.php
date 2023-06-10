<?php

namespace BetterFuturesStudio\Dall;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Laravel\Ui\Presets\Preset;

class DallPreset extends Preset
{
    const NPM_PACKAGES_TO_ADD = [
        '@alpinejs/persist' => '^3.12',
        'alpinejs' => '^3.8',
        'autoprefixer' => '^10.4',
        'daisyui' => '^3.0',
        'postcss' => '^8.4',
        'tailwindcss' => '^3.0',
    ];

    const NPM_PACKAGES_TO_REMOVE = [
        'lodash',
        'axios',
    ];

    public static function install()
    {
        static::updatePackages();

        $filesystem = new Filesystem();
        $filesystem->deleteDirectory(resource_path('sass'));
        $filesystem->copyDirectory(__DIR__.'/../stubs/default', base_path());

        static::updateFile(base_path('app/Providers/RouteServiceProvider.php'), function ($file) {
            return str_replace("public const HOME = '/home';", "public const HOME = '/';", $file);
        });

        static::updateFile(base_path('app/Http/Middleware/RedirectIfAuthenticated.php'), function ($file) {
            return str_replace('RouteServiceProvider::HOME', "route('home')", $file);
        });
    }

    public static function installAuth()
    {
        $filesystem = new Filesystem();

        $filesystem->copyDirectory(__DIR__.'/../stubs/auth', base_path());
    }

    protected static function updatePackageArray(array $packages)
    {
        return array_merge(
            static::NPM_PACKAGES_TO_ADD,
            Arr::except($packages, static::NPM_PACKAGES_TO_REMOVE)
        );
    }

    /**
     * Update the contents of a file with the logic of a given callback.
     */
    protected static function updateFile(string $path, callable $callback)
    {
        $originalFileContents = file_get_contents($path);
        $newFileContents = $callback($originalFileContents);
        file_put_contents($path, $newFileContents);
    }
}
