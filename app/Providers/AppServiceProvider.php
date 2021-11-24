<?php

namespace App\Providers;

use App\Billing\BankPaymentGateaway;
use App\Billing\PaymentGateawayContract;
use App\Models\Channel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        //Option -1 Every single view
        //View::share('channels', Channel::orderBy('name')->get());

        View::composer(['post.create', 'channel.index'], function ($view) {
           $view->with('channels', Channel::orderBy('name')->get());
        });
    }
}
