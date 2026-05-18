<?php

declare(strict_types=1);

namespace Nlocascio\Mindbody;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Nlocascio\Mindbody\Contracts\MindbodyInterface;

final class MindbodyServiceProvider extends ServiceProvider implements DeferrableProvider
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
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/mindbody.php', 'mindbody');

        $this->app->singleton(MindbodyInterface::class, function () {
            return new Mindbody();
        });

        $this->app->alias(MindbodyInterface::class, Mindbody::class);
    }

    /**
     * Undocumented function
     *
     * @return array<string>
     */
    public function provides(): array
    {
        return [MindbodyInterface::class, Mindbody::class];
    }
}
