<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PsfRepository::class, \App\Repositories\PsfRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AgendaRepository::class, \App\Repositories\AgendaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PatientRepository::class, \App\Repositories\PatientRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\DoctorRepository::class, \App\Repositories\DoctorRepositoryEloquent::class);
        //:end-bindings:
    }
}
