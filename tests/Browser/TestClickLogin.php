<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestClickLogin extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
       $this->browse(function (Browser $browser) {
            $browser->visit('/project_bookstore/client')
                    ->click('nav > div > div.collapse.navbar-collapse.navbar-ex1-collapse > ul > li:nth-child(5) > a')
                    ->type('username', 'client4')
                    ->type('password', 123456)
                    ->click('#btn-login')
                    ->assertSee('Username:')
                    ->assertPathIs('/project_bookstore/client');
        });
    }
}
