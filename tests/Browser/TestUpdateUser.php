<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestUpdateUser extends DuskTestCase
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
                    ->type('txtUsername', 'admin1')
                    ->type('txtPassword', 12345)
                    ->press('Login')
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(4)')
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(4) > ul > li:nth-child(1) > a')
                    ->click('#myTable > tr:nth-child(1) > td:nth-child(6) > a')
                    ->type('txtPassword', 123456789)
                    ->type('txtRePassword', 123456789)
                    ->radio('rdoLevel','2')
                    ->press('Add')
                    ->assertSee('Success !! Complete Edit User')
                    ->assertPathIs('/project_bookstore/admin/user/list');
        });
    }
}
