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
            UserRepositoryInterface::class, 
            UserRepository::class
        );
    }
}