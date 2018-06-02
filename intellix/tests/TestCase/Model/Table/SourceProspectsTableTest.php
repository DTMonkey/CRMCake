<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SourceProspectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SourceProspectsTable Test Case
 */
class SourceProspectsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SourceProspectsTable
     */
    public $SourceProspects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.source_prospects',
        'app.users',
        'app.contacts',
        'app.leads',
        'app.prospects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SourceProspects') ? [] : ['className' => SourceProspectsTable::class];
        $this->SourceProspects = TableRegistry::get('SourceProspects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SourceProspects);

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
