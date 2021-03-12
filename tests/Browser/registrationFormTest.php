<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class registrationFormTest extends DuskTestCase
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
                    ->assertDontSee('Laravel');
        });
    }
    public function test_database_contains_user_after_registration() {
        $this->browse(function (Browser $browser) {
            $browser->visit('register')
                    ->assertPathIs('/register')
                    ->type('name', 'Leroux')
                    ->type('first_name', 'Yannick')
                    ->type('email', 'YannickLeroux@yahoo.com')
                    ->type('password', 'abc*999_21')
                    ->type('password_confirmation', 'abc*999_21')
                    ->pause(2000)
                    ->screenshot('registration')
                    ->press('Registreren')
                    ->pause(1000)
                    ->assertPathIs('/home')
                    ->assertSee('Je bent ingelogd!');                    
        });
        $this->assertDatabaseHas('users', ['email' => 'YannickLeroux@yahoo.com']);
    }
}