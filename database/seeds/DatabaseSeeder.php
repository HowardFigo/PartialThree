<?php

use Illuminate\Database\Seeder;
use App\Rol;
use App\Client;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Rol::class, 1)->create(['name' => 'client']);
        factory(\App\Rol::class, 1)->create(['name' => 'professional']);
        factory(\App\Rol::class, 1)->create(['name' => 'admin']);
        
        factory(\App\User::class, 1)->create([
		    'name' => 'Cliente',
		    'role_id' => \App\Rol::CLIENT
	    ])
	        ->each(function (\App\User $u) {
	            factory(\App\Client::class, 1)->create(['user_id' => $u->id]);
	    });

        factory(\App\User::class, 50)->create()
             ->each(function (\App\User $u) {
                 factory(\App\Client::class, 1)->create(['user_id' => $u->id]);
             });

         factory(\App\User::class, 10)->create()
            ->each(function (\App\User $u) {
	             factory(\App\Client::class, 1)->create(['user_id' => $u->id]);
                 factory(\App\Professional::class, 1)->create(['user_id' => $u->id]);
             });

            
             factory(\App\Category::class, 5)->create();

             factory(\App\Service::class, 50)->create();

             factory(\App\Review::class, 40)->create();
    }
}
