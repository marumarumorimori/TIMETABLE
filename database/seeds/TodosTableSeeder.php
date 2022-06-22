<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert(
            [
              [
                'date'=>'2022-06-09',
                'starttime'=>'08:30',
                'todostudy1'=>1,
                'todostudy2'=>0,
                'todostudy3'=>1,
                'todostudy4'=>1,
                'todostudy5'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
              ],

              ]
        );
    }
}
