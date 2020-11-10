<?php


namespace Core\Providers;


use Core\Repositories\BaseRepository;
use Illuminate\Support\ServiceProvider;
use Jsdecena\Baserepo\BaseRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bind the interface to an implementation repository class
     */
    public function register()
    {
        $this->app->bind(
            BaseRepositoryInterface::class,
            BaseRepository::class
        );
    }

}
