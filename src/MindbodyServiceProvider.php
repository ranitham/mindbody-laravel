<?php

namespace Nlocascio\Mindbody;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class MindbodyServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Boot ServiceProvider
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/mindbody.php' => config_path('mindbody.php'),
        ]);
    }

    /**
     * Register ServiceProvider bindings
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/mindbody.php', 'mindbody');

        $this->app->singleton(Mindbody::class, function () {
            $connection = config('mindbody.default');
            $settings = config('mindbody.connections');

            return new Mindbody();
        });
    }

    /**
     * Undocumented function
     *
     * @return array<string>
     */
    public function provides(): array
    {
        return [Mindbody::class];
    }
}
