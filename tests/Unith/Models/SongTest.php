<?php

namespace Tests\Unith\Models;

use App\Models\Song;
use Tests\TestCase;

class SongTest extends TestCase
{
    /** @test */
    public function it_can_be_instantiated()
    {
        $this->assertInstanceOf(Song::class, new Song());
    }
}
