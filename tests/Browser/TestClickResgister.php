<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestClickResgister extends DuskTestCase
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
                    ->click('nav > div > div.collapse.navbar-collapse.navbar-ex1-collapse > ul > li:nth-child(4) > a')
                    ->assertPathIs('/project_bookstore/client/register');
        });
    }
}
