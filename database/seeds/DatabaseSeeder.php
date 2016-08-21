<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    // list of table names to clear so when dummy data created will clear table first
    private $toTruncate = [
        'password_resets',
        'users',
        'lessons',
        'notifications',
        'customers',
        'admins',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::statement("SET foreign_key_checks=0");

        // $this->call(UsersTableSeeder::class);

        Model::unguard();
        $this->cleanDatabase();
        // create some constant data and relate records
        $this->call('ConstantsTableSeeder');

        // The following line will populate the users table with 50 random users for testing...comment the following line to prevent 50 users from being created then run /scripts/refresh_migrations
        $this->call('UsersTableSeeder');
        $this->call('CustomersTableSeeder');
        $this->call('AdminsTableSeeder');

        Model::reguard();

//        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
    public function cleanDatabase()
    {
        foreach ($this->toTruncate as $table) {
            DB::table($table)->truncate();
        }
    }
}
