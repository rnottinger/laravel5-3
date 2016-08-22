<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User', 10)->create();

        /*
        // we can pass an associative array here that will override the defaults from factory blueprint
        factory('App\User', 50)->create([
            'name' => 'John Doe'  // if always want name to be John Doe
        ]);
        */
    }
}
