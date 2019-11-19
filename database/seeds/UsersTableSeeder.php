<?php

use App\User;
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
        User::create([
            'name' => 'Tobias Olsson',
            'email' => 'info@tobias-olsson.se',
            'password' => Hash::make('123123'),
        ]);
    }
}
