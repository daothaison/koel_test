<?php

use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Artist::create([
            'name' => Artist::UNKNOWN_NAME,
        ]);
    }
}
