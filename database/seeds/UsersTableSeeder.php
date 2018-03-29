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
        app\User::create([
            'first_name' => 'Jorge I.',
            'last_name'  => 'Meza',
            'email'      => 'jimezam@autonoma.edu.co',
            'password'   => Hash::make('hola123'),
        ]);
    }
}
