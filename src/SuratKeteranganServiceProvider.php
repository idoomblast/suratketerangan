<?php
namespace Idoomblast\SuratKeterangan;

use Illuminate\Support\ServiceProvider;

class SuratKeteranganServiceProvider extends ServiceProvider
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
        //
        $this->app->make('Idoomblast\SuratKeterangan\Controller\SuratKeteranganController');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views/suratketerangan', 'suratketerangan');
        $this->publishes([
            __DIR__.'/views/base/sale_pos/partials' => base_path('resources/views/sale_pos/partials'),
            #__DIR__.'/views/suratketerangan' => base_path('resources/views/idoomblast/suratketerangan'),
            __DIR__.'/assets/images' => public_path('suratketerangan/images'),
        ]);
    }
}