<?php
namespace Ryantxr\LaravelQuark;

use App\View\Components\AppLayout as ComponentsAppLayout;
use Illuminate\Support\ServiceProvider as SupportServiceProvider;
use Illuminate\Support\Facades\Blade;
use Ryantxr\LaravelQuark\View\Components\AppLayout;
use Ryantxr\LaravelQuark\View\Components\Badge;

class ServiceProvider extends SupportServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() : void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/quark.php', 'quark');
        $this->app->singleton('quark', function ($app) {
            return new Quark('my quark');
        });
    }


    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot() : void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'quark');
        
        $this->publishes([
            __DIR__.'/../config/quark.php' => config_path('quark.php'),
        ]);

        Blade::component('quark-page', AppLayout::class);
        Blade::component('quark-badge', Badge::class);
        Blade::component('quark::components.anon.badge', 'anon.badge');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['quark'];
    }
}