<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'id' => 1,
                'title' => 'living',
                'slug' => 'living',
                'parent_id' => 0
            ],
            [
                'id' => 2,
                'title' => 'bedroom',
                'slug' => 'bedroom',
                'parent_id' => 0
            ],
            [
                'id' => 3,
                'title' => 'office',
                'slug' => 'office',
                'parent_id' => 0
            ],
            [
                'id' => 4,
                'title' => 'decor',
                'slug' => 'decor',
                'parent_id' => 0
            ],
        ]);

        Category::insert([
            [
                'title' => 'dining tables',
                'slug' => 'dining-tables',
                'parent_id' => 1
            ],
            [
                'title' => 'dining chairs',
                'slug' => 'dining-chairs',
                'parent_id' => 1
            ],
            [
                'title' => 'buffets',
                'slug' => 'buffets',
                'parent_id' => 1
            ],
            [
                'title' => 'consoles',
                'slug' => 'consoles',
                'parent_id' => 1
            ],
        ]);
    }
}
