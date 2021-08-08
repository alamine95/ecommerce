<?php

use App\Category;
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
        Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics'
        ]);

        Category::create([
            'name' => 'Games',
            'slug' => 'games'
        ]);

        Category::create([
            'name' => 'Livres',
            'slug' => 'livres'
        ]);

        Category::create([
            'name' => 'Nourriture',
            'slug' => 'nourriture'
        ]);

        Category::create([
            'name' => 'Vaisselles',
            'slug' => 'vaisselles'
        ]);
    }
}
