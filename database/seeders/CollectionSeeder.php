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
        Collection::create([
            [
                'name' => 'mirage',
                'slug' => 'mirage'
            ],
            [
                'name' => 'charisma',
                'slug' => 'charisma'
            ],
            [
                'name' => 'infinity',
                'slug' => 'infinity'
            ],
            [
                'name' => 'vision',
                'slug' => 'vision'
            ],
            [
                'name' => 'alchemy',
                'slug' => 'alchemy'
            ],
            [
                'name' => 'coliseum',
                'slug' => 'coliseum'
            ],
            [
                'name' => 'lifetime',
                'slug' => 'lifetime'
            ],
            [
                'name' => 'daydream',
                'slug' => 'daydream'
            ],
            [
                'name' => 'absolute',
                'slug' => 'absolute'
            ],
            [
                'name' => 'sunrise',
                'slug' => 'sunrise'
            ],
            [
                'name' => 'vogue',
                'slug' => 'vogue'
            ],
        ]);
    }
}
