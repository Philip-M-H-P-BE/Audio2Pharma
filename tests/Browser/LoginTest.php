<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Audio2Pharma');
        });
    }
    public function test_registered_user_can_log_in() {
        $user = User::factory()->create([
            'password' => bcrypt('10*Raantje_Keesje'),
            'first_name' => 'Emma'
        ]);
        $this->assertDatabaseHas('users', ['email' => $user->email, 'first_name' =>'Emma']);
        $this->browse(function (Browser $browser) use($user) {
            $browser->visit('login')
                ->assertPathIs('/login')
                ->type('email', $user->email)
                ->type('password', '10*Raantje_Keesje')
                ->pause(2000)
                ->screenshot('login')
                ->press('Inloggen')
                ->pause(1000)
                ->assertPathIs('/home')
                ->assertSee('Je bent ingelogd!');
        });
    }
}
