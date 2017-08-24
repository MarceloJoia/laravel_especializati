<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        App\user::create([
            "user_name" => "admin",
            "user_email" => "admin@laravel.com",
            "password" => bcrypt("admin")
        ]);
    }

}
