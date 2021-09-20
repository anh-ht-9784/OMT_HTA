<?php
namespace App\Providers;
use App\Repositories\users\UserRepository;
use App\Repositories\users\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            // 'App\Repositories\users\UserRepositoryInterface',
            // 'App\Repositories\users\UserRepository',
            UserRepositoryInterface::class, 
            UserRepository::class
        );
    }
}