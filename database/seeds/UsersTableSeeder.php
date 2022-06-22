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
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'user1',
            'email' =>'user1@example.com',
            'avatar' =>  'user1.png',
            'password' => Hash::make('user1234'),
        ]);
    }
}
