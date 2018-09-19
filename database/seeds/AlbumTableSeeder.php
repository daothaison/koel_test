<?php

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Album::create([
            'name' => Album::UNKNOWN_NAME,
            'cover' => Album::UNKNOWN_COVER,
        ]);
    }
}
