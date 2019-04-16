<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestDeleteCategory extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testDeleteCateNoChild()
    {
        //Test Delete Cate no child.
         $this->browse(function (Browser $browser) {
           $browser->visit('http://localhost/project_bookstore/admin/login')
                    ->type('txtUsername', 'admin')
                    ->type('txtPassword', 12345)
                    ->press('Login')
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(2)')
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(2) > ul > li:nth-child(1) > a')
                    ->click('#myTable > tr:nth-child(1) > td:nth-child(4) > a')
                    ->assertDialogOpened('You want to delete')
                    ->acceptDialog() 
                    ->assertSee('Success !! Complete Delete Category')
                    ->assertPathIs('/project_bookstore/admin/cate/list');
        });
    }

    public function testDeleteCateHaveChild() 
    {
         $this->browse(function (Browser $browser) {
           $browser->visit('http://localhost/project_bookstore/admin/login')
                    ->type('txtUsername', 'admin')
                    ->type('txtPassword', 12345)
                    ->press('Login')
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(2)')
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(2) > ul > li:nth-child(1) > a')
                    ->click('#myTable > tr:nth-child(1) > td:nth-child(4) > a')
                    ->assertDialogOpened('You want to delete')
                    ->acceptDialog() 
                    ->assertDialogOpened('Sory! You Can Not Delete This Category')
                    ->acceptDialog()
                    ->assertPathIs('/project_bookstore/admin/cate/list');
        });
    }
}
