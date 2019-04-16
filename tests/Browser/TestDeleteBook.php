<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestDeleteBook extends DuskTestCase
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
                    ->click(' ul > li.item-parent:nth-child(3')
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(3) > ul > li:nth-child(1) > a')
                    ->click('#myTable > tr:nth-child(1) > td:nth-child(11) > a')
                    ->assertDialogOpened('You want to delete')
                    ->acceptDialog() 
                    ->assertSee('Success !! Complete Delete Book')
                    ->assertPathIs('/project_bookstore/admin/book/list');
        });
    }
}
