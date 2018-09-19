<?php

namespace Tests\Unitr\Services;

use App\Models\Playlist;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PlaylistTest extends TestCase
{

    /** @test */
    public function it_can_be_instantiated()
    {
        $this->assertInstanceOf(Playlist::class, new Playlist());
    }
}
