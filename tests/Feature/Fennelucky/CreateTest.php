<?php

use App\Models\User;
use Faker\Factory as Faker;

test('users can create fenneluckies', function () {
    $user = User::factory()->create();
    $faker = Faker::create();
    $this->actingAs($user);
    $name = $faker->userName;

    $response = $this->postJson('/api/fenneluckies/create', [
        'name' => $name,
        'user_id' => $user->id,
    ]);

    $this->assertDatabaseCount('fenneluckies', 1);

    $response->assertStatus(201)
        ->assertJsonFragment(['name' => $name, 'user_id' => $user->id]);
});
