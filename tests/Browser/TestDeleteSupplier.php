<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestDeleteSupplier extends DuskTestCase
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
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(1)')
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(1) > ul > li:nth-child(1) > a')
                    ->click('#myTable > tr:nth-child(1) > td:nth-child(3) > a')
                    ->assertDialogOpened('You want to delete')
                    ->acceptDialog() 
                    ->assertSee('Success !! Complete Delete Supplier')
                    ->assertPathIs('/project_bookstore/admin/supplier/list');
        });
    }
}