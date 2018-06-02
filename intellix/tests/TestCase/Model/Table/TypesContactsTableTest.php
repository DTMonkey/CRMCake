<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypesContactsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypesContactsTable Test Case
 */
class TypesContactsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypesContactsTable
     */
    public $TypesContacts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.types_contacts',
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
        $config = TableRegistry::exists('TypesContacts') ? [] : ['className' => TypesContactsTable::class];
        $this->TypesContacts = TableRegistry::get('TypesContacts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypesContacts);

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
