<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestViewListUser extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost/project_bookstore/admin/login')
                    ->type('txtUsername', 'admin')
                    ->type('txtPassword', 12345)
                    ->press('Login')
                    ->click(' ul > li.item-parent:nth-child(4)')
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(4) > ul > li:nth-child(1) > a')
                    ->assertSee('List Category')
                    ->assertPathIs('/project_bookstore/admin/user/list');

        });
    }
}
