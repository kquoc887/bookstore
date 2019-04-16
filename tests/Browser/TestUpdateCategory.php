<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestUpdateCategory extends DuskTestCase
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
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(2)')
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(2) > ul > li:nth-child(1) > a')
                    ->click('#myTable > tr:nth-child(1) > td:nth-child(5) > a')
                    ->select('cate_parent', '0')
                    ->type('txtCateName', 'Sách văn học lịch sử 1')
                    ->press('Submit')
                    ->assertSee('Success !! Complete Eidt Category')
                    ->assertPathIs('/project_bookstore/admin/cate/list');
        });
    }
}
