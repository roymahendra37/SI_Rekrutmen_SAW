<?php

namespace App\Providers;

use App\Models\Kriteria;
use Illuminate\Support\ServiceProvider;
use App\Models\Pelamar;
use App\Observers\PelamarObserver;
use App\Observers\KriteriaObserver;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Pelamar::observe(PelamarObserver::class);
        Kriteria::observe(KriteriaObserver::class);
    }

    public function register()
    {
        //
    }
}