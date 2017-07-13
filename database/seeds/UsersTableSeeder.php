<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::create([
            'name' => 'Nama User Pertama',
            'email' => 'user1@example.com',
            'password' => app('hash')->make('pass')
        ]));
    }
}
