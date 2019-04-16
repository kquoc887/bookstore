<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestAddBook extends DuskTestCase
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
                    ->click(' ul > li.item-parent:nth-child(3)')
                    ->click('div.col-md-3.col-xs-5.slidebar > ul > li:nth-child(3) > ul > li:nth-child(2) > a')
                    ->select('category', '25')
                    ->select('supplier', '88')
                    ->type('txtBookName', 'Sách bài tập tiếng anh tập 1')
                    ->type('txtPubCompany', 'Giáo Dục')
                    ->type('txtWeight', '220g')
                    ->type('txtSize', '17 x 21 cm')
                    ->type('txtAuthor', 'Nhiều tác giả')
                    ->type('txtPages', '200')
                    ->attach('fImage', base_path('public\admin\upload\images-book\demen.jpeg'))
                    ->type('txtPrice', '70000')
                    ->type('txtPubYear', '2018')
                    ->type('txtDescription', 'Câu chuyện trong sách mang đến những bài học về lịch sử nước Nam, cung cấp cho bé nguồn kiến thức một cách nhẹ nhàng và dễ nhớ. Các vị anh hùng Việt Nam và sự hi sinh bất khuất trong các câu chuyện sẽ như những tấm gương sáng để các bé học hỏi và noi theo')
                    ->press('Product Add')
                    ->assertPathIs('/project_bookstore/admin/book/list');
        });
    }
}
