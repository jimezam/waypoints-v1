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
        Schema::disableForeignKeyConstraints();
        // DB::table('users')->truncate();
        App\User::truncate();
        Schema::enableForeignKeyConstraints();

        App\User::create([
            'name' => 'Jorge I. Meza',
            'email'      => 'jimezam@autonoma.edu.co',
            'password'   => Hash::make('hola123'),
        ]);
    }
}
