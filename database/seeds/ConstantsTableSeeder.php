<?php

use App\Admin;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ConstantsTableSeeder extends Seeder
{
    /**
     *
     */
    public function run()
    {
        /*
         * Base User Accounts
         */
        // Super Administrator (User)
        // first user that is created with id 1 will be able to do anything...see Providers/AuthServiceProvider.php...boot method call $gate->before
        $superU = Admin::create([
//            'first_name' => 'Super',
//            'last_name'  => 'Administrator',
//            'username'   => 'superadmin',
//            'active'     => 1,
            'name'       => 'Super Administrator',
            'email'      => 'it@example.com',
            'password'   => bcrypt('password'),
//            'password'   => 'password',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Administrator (User)
        $adminU = Admin::create([
//            'first_name' => 'Administrator',
//            'last_name'  => '',
//            'username'   => 'admin',
//            'active'     => 1,
            'name'       => 'Administrator',
            'email'      => 'admin@example.com',
            'password'   => bcrypt('password'),
//            'password'   => 'password',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}