<?php

use Illuminate\Database\Seeder;
use App\User;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_id' => User::all()->random()->id,
            'avatar' => 'default.png',
        ]);

    }
}
