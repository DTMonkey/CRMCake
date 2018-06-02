<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypesLeadsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypesLeadsTable Test Case
 */
class TypesLeadsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypesLeadsTable
     */
    public $TypesLeads;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.types_leads',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TypesLeads') ? [] : ['className' => TypesLeadsTable::class];
        $this->TypesLeads = TableRegistry::get('TypesLeads', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypesLeads);

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
