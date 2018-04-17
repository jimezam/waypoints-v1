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

        // $category_id = Category::where('name', 'xxx')->value('id');

        factory(App\Waypoint::class, 10)->create();
    }
}
