<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestClickLogout extends DuskTestCase
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
                    ->click(' nav > div > div.collapse.navbar-collapse.navbar-ex1-collapse > ul > li.dropdown.open > a')
                    ->click('nav > div > div.collapse.navbar-collapse.navbar-ex1-collapse > ul > li.dropdown.open > ul > li > a')
                    ->assertPathIs('/project_bookstore/client');
        });
    }
}
