<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class EventControllerTest extends TestCase
{
    use DatabaseMigrations;
    use withoutMiddleware;
    use RefreshDatabase;

    public function test_can_create_event() {
        $data = [
            'event_name' => "Ice castles",
            'description' => "It is a frozen affair"
        ];

        $response =  $this->json("POST", "/events", $data)->assertStatus(302);

        $this->assertDatabaseHas('events', [
            'event_name' => 'Ice castles'
        ]);

    }

    public function test_can_edit_event() {
        $data = [
            'event_name' => "Ice castles",
            'description' => "It is a frozen affair"
        ];
        $data2 = [
            'event_name' => "Burning man",
            'description' => "It is a frozen affair"
        ];
        $event = tap(new Event($data))->save();
        $response =  $this->json("PUT", "/events/1", $data2)->assertStatus(302);
        $this->assertDatabaseHas('events', [
            'event_name' => 'Burning man'
        ]);
    }

    public function test_can_delete_event() {
        $data = [
            'event_name' => "Ice castles",
            'description' => "It is a frozen affair"
        ];
        $event = tap(new Event($data))->save();
        $response =  $this->json("DELETE", "/events/1")->assertStatus(200);
        $this->assertDatabaseMissing('events', ['event_name' => 'Burning man']);
    }
}
