<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class LinkTest extends TestCase
{
    public function testWeSeeAListOfLinks()
    {
        factory(App\Entry::class)->create([
            'maintenance_name' => 'Entry 1',
        ]);
        $this->visit('/entrytest')
            ->see('Entry 1');
    }
}
