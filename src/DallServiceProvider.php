<?php

namespace BetterFuturesStudio\Dall;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class DallServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('dall', function ($command) {
            DallPreset::install();

            $command->info('DALL preset scaffolding installed successfully.');

            if ($command->option('auth')) {
                DallPreset::installAuth();

                $command->info('Auth scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your new assets.');
        });

        Paginator::defaultView('pagination::default');

        Paginator::defaultSimpleView('pagination::simple-default');
    }
}
