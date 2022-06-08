<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_has_namee()
    {
        $user = User::factory()->make([
            'name' => 'Wasita Gebsaap',
            'email' => 'test@test.com'
        ]);

        $this->assertEquals('Wasita Gebsaap', $user->name);
    }
}

