<?php

namespace Tests\Feature;

use Tests\TestCase;

class ShowRoomsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/rooms');

        $response->assertStatus(200)
        ->assertSeeText('Type')
        ->assertViewIs('rooms.index')
        ->assertViewHas('rooms');
    }
}
