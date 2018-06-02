<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProspectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProspectsTable Test Case
 */
class ProspectsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProspectsTable
     */
    public $Prospects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.prospects',
        'app.users',
        'app.source_prospects',
        'app.status'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Prospects') ? [] : ['className' => ProspectsTable::class];
        $this->Prospects = TableRegistry::get('Prospects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Prospects);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
