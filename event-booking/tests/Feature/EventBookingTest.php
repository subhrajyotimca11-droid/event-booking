<?php

namespace Tests\Feature;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventBookingTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'buyer']);
    }

    public function test_buyer_can_view_available_events(): void
    {
        $user = User::factory()->create();
        $user->assignRole('buyer');

        $response = $this->actingAs($user)->get(route('buyer.events.index'));

        $response->assertStatus(200);
    }

    public function test_admin_can_create_event(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $response = $this->actingAs($admin)->get(route('admin.events.create'));

        $response->assertStatus(200);
    }

    public function test_buyer_cannot_access_admin_routes(): void
    {
        $buyer = User::factory()->create();
        $buyer->assignRole('buyer');

        $response = $this->actingAs($buyer)->get(route('admin.events.index'));

        $response->assertStatus(403);
    }

    public function test_admin_can_access_admin_routes(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $response = $this->actingAs($admin)->get(route('admin.events.index'));

        $response->assertStatus(200);
    }
}