<?php

namespace Tests\Unitq\Services;

use App\Models\Playlist;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PlaylistTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function it_can_be_instantiated()
    {
        $this->assertInstanceOf(Playlist::class, new Playlist());
    }
}
