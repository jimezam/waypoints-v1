<?php

use Illuminate\Database\Seeder;

class WaypointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        // DB::table('waypoints')->truncate();
        App\Waypoint::truncate();
        Schema::enableForeignKeyConstraints();

        factory(App\Waypoint::class, 10)->create();
    }
}
