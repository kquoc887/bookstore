<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestAddCategory extends DuskTestCase
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
                    ->click(' ul > li.item-parent:nth-child(2)')
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(2) > ul > li:nth-child(2) > a')
                    ->select('cate_parent', '25')
                    ->type('txtCateName', 'Sách văn học nước ngoài')
                    ->press('Submit')
                    ->assertPathIs('/project_bookstore/admin/cate/list');
        });
    }
}
