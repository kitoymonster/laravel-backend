<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SeederTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLinksTable() {
        //$this->assertTrue(true);
	$this->seeInDatabase('entry', ['maintenance_name' => 'Dr. Sigmund Farrell II']);
    }
}
