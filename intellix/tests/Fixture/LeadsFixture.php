<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LeadsFixture
 *
 */
class LeadsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name_lead' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'forcecast_amount' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'term' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'next' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'probability' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'description' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'sale_phase_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'campaign_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'account_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contact_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'paid_to_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'secteur_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lead_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'source_prospect_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_lead_account' => ['type' => 'index', 'columns' => ['account_id'], 'length' => []],
            'fk_lead_campaign' => ['type' => 'index', 'columns' => ['campaign_id'], 'length' => []],
            'fk_lead_contact' => ['type' => 'index', 'columns' => ['contact_id'], 'length' => []],
            'fk_lead_lead_type' => ['type' => 'index', 'columns' => ['lead_type_id'], 'length' => []],
            'fk_lead_paid_to' => ['type' => 'index', 'columns' => ['paid_to_id'], 'length' => []],
            'fk_lead_sale_phase' => ['type' => 'index', 'columns' => ['sale_phase_id'], 'length' => []],
            'fk_lead_secteur' => ['type' => 'index', 'columns' => ['secteur_id'], 'length' => []],
            'fk_lead_source_prospect' => ['type' => 'index', 'columns' => ['source_prospect_id'], 'length' => []],
            'fk_lead_user' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_lead_account' => ['type' => 'foreign', 'columns' => ['account_id'], 'references' => ['accounts', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_lead_campaign' => ['type' => 'foreign', 'columns' => ['campaign_id'], 'references' => ['campaigns', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_lead_contact' => ['type' => 'foreign', 'columns' => ['contact_id'], 'references' => ['contacts', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_lead_lead_type' => ['type' => 'foreign', 'columns' => ['lead_type_id'], 'references' => ['leads', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_lead_paid_to' => ['type' => 'foreign', 'columns' => ['paid_to_id'], 'references' => ['paid_to', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_lead_sale_phase' => ['type' => 'foreign', 'columns' => ['sale_phase_id'], 'references' => ['sale_phases', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_lead_secteur' => ['type' => 'foreign', 'columns' => ['secteur_id'], 'references' => ['secteurs', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_lead_source_prospect' => ['type' => 'foreign', 'columns' => ['source_prospect_id'], 'references' => ['source_prospects', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_lead_user' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'name_lead' => 'Lorem ipsum dolor sit amet',
                'forcecast_amount' => 1,
                'term' => '2018-05-16',
                'next' => 'Lorem ipsum dolor sit amet',
                'probability' => 1,
                'description' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-05-16 14:53:18',
                'modified' => '2018-05-16 14:53:18',
                'sale_phase_id' => 1,
                'campaign_id' => 1,
                'user_id' => 1,
                'account_id' => 1,
                'contact_id' => 1,
                'paid_to_id' => 1,
                'secteur_id' => 1,
                'lead_type_id' => 1,
                'source_prospect_id' => 1
            ],
        ];
        parent::init();
    }
}
