<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalePhasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalePhasesTable Test Case
 */
class SalePhasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalePhasesTable
     */
    public $SalePhases;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sale_phases',
        'app.users',
        'app.leads'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SalePhases') ? [] : ['className' => SalePhasesTable::class];
        $this->SalePhases = TableRegistry::get('SalePhases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SalePhases);

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
