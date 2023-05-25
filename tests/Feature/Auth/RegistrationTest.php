<?php

test('new users can create a token', function () {
    $response = $this->post('/token', [
        'email' => 'test@example.com',
    ]);

    $this->assertDatabaseCount('users', 1);
    $this->assertDatabaseCount('personal_access_tokens', 1);
    $response->assertJsonFragment(['status' => 'success']);
});
