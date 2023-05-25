<?php

use App\Models\User;

test('users can regenerate tokens', function () {
    $user = User::factory()->create();

    $response = $this->post('/token', [
        'email' => $user->email,
    ]);

    $this->assertDatabaseCount('users', 1);
    $this->assertDatabaseCount('personal_access_tokens', 1);
    $response->assertJsonFragment(['status' => 'success']);
});
