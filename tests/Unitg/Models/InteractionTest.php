<?php

namespace Tests\Unitg\Models;

use App\Models\Interaction;
use Tests\TestCase;

class InteractionTest extends TestCase
{
    /** @test */
    public function it_can_be_instantiated()
    {
        $this->assertInstanceOf(Interaction::class, new Interaction());
    }
}
