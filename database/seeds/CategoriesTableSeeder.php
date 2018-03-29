<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        // DB::table('categories')->truncate();
        App\Category::truncate();
        Schema::enableForeignKeyConstraints();
        
        factory(App\Category::class, 5)->create();
    }
}
