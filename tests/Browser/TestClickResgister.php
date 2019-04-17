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
                    ->type('username_res', 'client5')
                    ->type('email_res', 'client5@gmail.com')
                    ->type('password_res', 123456)
                    ->type('repassword', 123456)
                    ->press('Đăng ký')
                    ->assertSee('Đăng ký tài khoản thành công')
                    ->assertPathIs('/project_bookstore/client/register');

        });
    }
}
