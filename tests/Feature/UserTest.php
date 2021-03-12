<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;  // wipe database clean and run all migrations up!!!
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_full_name_accessor_works() {
        $user = User::factory()->create([
            'first_name' => 'Jordi',
            'name' => 'Alders'
        ]);
        $this->assertEquals('Jordi Alders', $user->full_name);
    }
}
