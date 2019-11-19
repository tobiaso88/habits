<?php

use Illuminate\Database\Seeder;

class HabitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'user_id' => 1,
                'title' => 'Workout',
                'regularity' => App\Enums\Regularity::Daily,
            ],
        ])->each(function($row) {
            App\Habit::create($row);
        });
    }
}
