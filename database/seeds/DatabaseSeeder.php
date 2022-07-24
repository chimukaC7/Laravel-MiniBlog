<?php

use Illuminate\Database\Seeder;

class kDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'=> 'Admin',
            'email'=> 'admin@admin.com',
            'password'=> bcrypt('password')
        ]);
        $this->call(CategoryTableSeeder::class);
    }

    //php artisan make:seeder UserTableSeeder

    //running
    //php artisan db:seed
    //php artisan migrate --seed

    //php artisan migrate:fresh --seed
}
