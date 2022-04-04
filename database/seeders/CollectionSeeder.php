<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::insert([
            [
                'title' => 'mirage',
                'slug' => 'mirage'
            ],
            [
                'title' => 'charisma',
                'slug' => 'charisma'
            ],
            [
                'title' => 'infinity',
                'slug' => 'infinity'
            ],
            [
                'title' => 'vision',
                'slug' => 'vision'
            ],
            [
                'title' => 'alchemy',
                'slug' => 'alchemy'
            ],
            [
                'title' => 'coliseum',
                'slug' => 'coliseum'
            ],
            [
                'title' => 'lifetime',
                'slug' => 'lifetime'
            ],
            [
                'title' => 'daydream',
                'slug' => 'daydream'
            ],
            [
                'title' => 'absolute',
                'slug' => 'absolute'
            ],
            [
                'title' => 'sunrise',
                'slug' => 'sunrise'
            ],
            [
                'title' => 'vogue',
                'slug' => 'vogue'
            ],
        ]);
    }
}
