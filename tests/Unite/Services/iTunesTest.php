<?php

namespace Tests\Unite\Services;

use App\Services\iTunes;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class iTunesTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function it_can_be_instantiated()
    {
        $this->assertInstanceOf(iTunes::class, new iTunes());
    }

    /** @test */
    public function its_usage_status_is_determined_by_configuration()
    {
        // Given the configuration to use the iTunes service is set to TRUE
        config(['koel.itunes.enabled' => true]);
        $iTunes = new iTunes();

        // When I check if the iTunes service should be used
        $used = $iTunes->used();

        // Then I see TRUE
        $this->assertTrue($used);

        // If the configuration is set to FALSE
        config(['koel.itunes.enabled' => false]);

        // When I check if the iTunes service should be used
        $used = $iTunes->used();

        // Then I see FALSE
        $this->assertFalse($used);
    }
}
