<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomePageTest extends DuskTestCase
{
    /**
     * Test page renders
     *
     * @return void
     */
    public function testRender()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('home')->assertTitleContains(config('app.name'));
        });
    }
}
