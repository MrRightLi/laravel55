<?php

namespace App\Providers;


use Geek\classes\Bill\EmailBillingNotifier;
use Geek\classes\Bill\SmsNotifier;
use Geek\classes\Bill\StripeBiller;
use Geek\contracts\Bill\Biller;
use Geek\contracts\Bill\BillingNotifier;
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

        $this->app->bind(Biller::class, function ($app) {
            return new StripeBiller($app->make(BillingNotifier::class));
        });

        /**
         * 这样，不管在应用的哪个地方注入/解析账单通知接口，都会得到 SmsBillingNotifier 类的实例。
         * 利用这种架构设计，我们的应用可以在各种服务的不同实现方式之间快速切换。
         *
         * 只改一行代码就能切换接口实现，真的是很强大。例如，
         * 如果我们想把短信服务的提供商从原来的联通替换为移动，可以开发一个新的基于移动接口实现的短信服务类，然后切换绑定语句。
         * 如果移动服务挂了，只需修改一行代码就可以快速切换回原来的短信提供商，这正是服务容器的强大之处。
         */
        $this->app->bind(BillingNotifier::class, function ($app) {
            return new EmailBillingNotifier();
        });

        /**
         * 有时候，你可能想在整个应用生命周期中只实例化某类一次，类似单例模式，可以通过 singleton 方法来注册接口与实现类。
         * 只要服务容器解析过这个账单通知对象实例一次，在剩余的请求生命周期中都会使用同一个实例。
         */
        // $this->app->singleton(BillingNotifier::class, function ($app) {
        //     return new EmailBillingNotifier();
        // });

        /**
         * 服务容器还提供了和 singleton 方法很类似的 instance 方法，
         * 区别是 instance 方法可以绑定一个已经存在的对象实例。然后容器每次解析的时候都会返回这个对象实例。
         */
//         $notifier = new SmsNotifier();
//         $this->app->instance(BillingNotifier::class, $notifier);
    }
}
