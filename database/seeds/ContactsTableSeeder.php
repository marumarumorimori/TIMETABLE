<?php

use Illuminate\Database\Seeder;
use App\User;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('contacts')->insert([


            'name' => 'user1',
            'email' =>'user1@example.com',
            'avatar' =>  'user1.png',
            'password' => Hash::make('user1234'),
        ]);

    }
}
