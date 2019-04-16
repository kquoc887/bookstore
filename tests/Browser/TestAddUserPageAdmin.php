<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestAddUserPageAdmin extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAddUserPageAdmin()
    {
       $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost/project_bookstore/admin/login')
                    ->type('txtUsername', 'admin')
                    ->type('txtPassword', 12345)
                    ->press('Login')
                    ->click(' ul > li.item-parent:nth-child(4)')
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(4) > ul > li:nth-child(2) > a')
                    ->type('txtUsername', 'admin3')
                    ->type('txtPassword', 12345)
                    ->type('txtRePassword', 12345)
                    ->type('txtEmail', 'admin3@gmail.com')
                    ->radio('rdoLevel','1')
                    ->press('Add')
                    ->assertPathIs('/project_bookstore/admin/user/list');

        });
                   
    }
}
