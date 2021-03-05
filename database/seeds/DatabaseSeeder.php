<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Penumpang\Penumpang;
use App\Model\Pemesanan\Pemesanan;
use App\Model\Transportasi\Transportasi;
use App\Model\Route\Route;
use App\Model\Type_Transportasi\Type_Transportasi;
use App\Model\Petugas\Petugas;
use App\Model\Level\Level;




class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	        // $this->call(UserSeeder::class);
	        factory(User::class,20)->create();
            factory(Type_Transportasi::class,50)->create();
            // factory(Transportasi::class,50)->create();
            // factory(Route::class,50)->create();
             factory(Level::class,50)->create();
              // factory(Petugas::class,50)->create();
	        // factory(Penumpang::class,50)->create();
	        // factory(Pemesanan::class,50)->create();
	        
	        
	        
    	    
           





    }
}
