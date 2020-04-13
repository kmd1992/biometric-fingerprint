<?php
namespace Kmd1992\Biometricfingerprint;

use Illuminate\Support\ServiceProvider;

class BiometricFingerprintServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'biometricfingerprint');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/biometricfingerprint.php','biometricfingerprint');
        $this->publishes([
            __DIR__.'/config/biometricfingerprint.php' => config_path('biometricfingerprint.php')
        ]);
    }

    public function register(){

    }
}
