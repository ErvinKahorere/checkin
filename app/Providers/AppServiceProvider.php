<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
// import the storage facade
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\FileNotFoundException;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        
        $business_key = config('fingerprint.fingerprint');

        $business_key = $business_key[0];

       // dd($business_key);

       config(          
        ['fingerprint' => $business_key]);



    

      //  dd($filename);



      
    //  dd($filename);
       


   
        



        
        // DB Logic
        
    //    config(['fingerprint' => '2']);

    }




    public function business_url() {

       
    
    }


       
    
}
