<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaidToTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaidToTable Test Case
 */
class PaidToTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaidToTable
     */
    public $PaidTo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.paid_to',
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
        $config = TableRegistry::exists('PaidTo') ? [] : ['className' => PaidToTable::class];
        $this->PaidTo = TableRegistry::get('PaidTo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PaidTo);

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
