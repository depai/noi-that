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
                'title' => 'MIRAGE',
                'slug' => 'mirage'
            ],
            [
                'title' => 'CHARISMA',
                'slug' => 'charisma'
            ],
            [
                'title' => 'INFINITY',
                'slug' => 'infinity'
            ],
            [
                'title' => 'VISION',
                'slug' => 'vision'
            ],
            [
                'title' => 'ALCHEMY',
                'slug' => 'alchemy'
            ],
            [
                'title' => 'COLISEUM',
                'slug' => 'coliseum'
            ],
            [
                'title' => 'LIFETIME',
                'slug' => 'lifetime'
            ],
            [
                'title' => 'DAYDREAM',
                'slug' => 'daydream'
            ],
            [
                'title' => 'ABSOLUTE',
                'slug' => 'absolute'
            ],
            [
                'title' => 'SUNRISE',
                'slug' => 'sunrise'
            ],
            [
                'title' => 'VOGUE',
                'slug' => 'vogue'
            ],
        ]);
    }
}
