<?php

namespace App\Providers;

use App\Billing\BankPaymentGateaway;
use App\Billing\PaymentGateawayContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGateawayContract::class, function ($app) {
            return new BankPaymentGateaway('usd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
