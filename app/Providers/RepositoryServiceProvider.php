<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Interfaces\UserInterface',
            'App\Repositories\UserRepository'
        );
        $this->app->bind(
            'App\Interfaces\UserCartInterface',
            'App\Repositories\UserCartRepository'
        );
        $this->app->bind(
            'App\Interfaces\ProductInterface',
            'App\Repositories\ProductRepository'
        );
        $this->app->bind(
            'App\Interfaces\CategoryInterface',
            'App\Repositories\CategoryRepository'
        );
        $this->app->bind(
            'App\Interfaces\RoleInterface',
            'App\Repositories\RoleRepository'
        );
        $this->app->bind(
            'App\Interfaces\TransactionInterface',
            'App\Repositories\TransactionRepository'
        );
        $this->app->bind(
            'App\Interfaces\TransactionDetailInterface',
            'App\Repositories\TransactionDetailRepository'
        );

        $this->app->bind(
            'App\Interfaces\SubCategoryInterface',
            'App\Repositories\SubCategoryRepository'
        );
    }
}
