<?php

namespace App\Providers;

use App\Repositories\CVRepository;
use App\Repositories\CVRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class CVServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CVRepositoryInterface::class, CVRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
