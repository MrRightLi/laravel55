<?php

namespace App\Providers;

use App\Contracts\BillerInterface;
use App\Contracts\BillingNotifierInterface;
use App\Contracts\StripeBiller;
use App\Serveices\EmailBillingNotifier;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }

//        $this->app->bind(BillerInterface::class, function ($app) {
//            return new StripeBiller($app->make(BillingNotifierInterface::class));
//        });
//
//        $this->app->bind(BillingNotifierInterface::class, function ($app) {
//            return new EmailBillingNotifier();
//        });
//
//        $notifier = new EmailBillingNotifier();
//        $this->app->instance(BillingNotifierInterface::class, $notifier);
    }
}
