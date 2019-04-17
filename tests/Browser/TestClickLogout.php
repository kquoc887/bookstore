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
                    ->waitForText('client4')
                    ->assertSee('client4')
                    ->click(' nav > div > div.collapse.navbar-collapse.navbar-ex1-collapse > ul > li.dropdown > a')
                    ->click('nav > div > div.collapse.navbar-collapse.navbar-ex1-collapse > ul > li.dropdown.open > ul > li > a')
                    ->waitForText('Đăng nhập')
                    ->assertSee('Đăng nhập')
                    ->assertPathIs('/project_bookstore/client');
        });
    }
}
