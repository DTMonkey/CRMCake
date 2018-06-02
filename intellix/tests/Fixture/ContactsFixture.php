<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContactsFixture
 *
 */
class ContactsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'phone' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'mobile' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'other_phone' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fax' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'do_not_call' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'interested_in' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'notify_owner' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'referent' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'first_name' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'entreprise' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fonction' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'assistant' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email_opt_out' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'client' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'service_portal_access' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'support_start_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'end_date_support' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'wilaya' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'city' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contact_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lead_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'source_prospect_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'account_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'statut_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'secteur_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'product_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_contact_account' => ['type' => 'index', 'columns' => ['account_id'], 'length' => []],
            'fk_contact_user' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_contact_contact' => ['type' => 'index', 'columns' => ['contact_type_id'], 'length' => []],
            'fk_contact_lead' => ['type' => 'index', 'columns' => ['lead_id'], 'length' => []],
            'fk_contact_product' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
            'fk_contact_secteur' => ['type' => 'index', 'columns' => ['secteur_id'], 'length' => []],
            'fk_contact_source_prospect' => ['type' => 'index', 'columns' => ['source_prospect_id'], 'length' => []],
            'fk_contact_statut' => ['type' => 'index', 'columns' => ['statut_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_contact_account' => ['type' => 'foreign', 'columns' => ['account_id'], 'references' => ['accounts', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_contact_contact' => ['type' => 'foreign', 'columns' => ['contact_type_id'], 'references' => ['contacts', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_contact_lead' => ['type' => 'foreign', 'columns' => ['lead_id'], 'references' => ['leads', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_contact_product' => ['type' => 'foreign', 'columns' => ['product_id'], 'references' => ['products', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_contact_secteur' => ['type' => 'foreign', 'columns' => ['secteur_id'], 'references' => ['secteurs', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_contact_source_prospect' => ['type' => 'foreign', 'columns' => ['source_prospect_id'], 'references' => ['source_prospects', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_contact_statut' => ['type' => 'foreign', 'columns' => ['statut_id'], 'references' => ['status', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_contact_user' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'name' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit a',
                'mobile' => 1,
                'other_phone' => 1,
                'fax' => 1,
                'do_not_call' => 1,
                'interested_in' => 'Lorem ipsum dolor sit amet',
                'notify_owner' => 1,
                'referent' => 1,
                'first_name' => 'Lorem ipsum dolor sit a',
                'entreprise' => 'Lorem ipsum dolor sit amet',
                'fonction' => 'Lorem ipsum dolor sit a',
                'email' => 'Lorem ipsum dolor sit a',
                'assistant' => 'Lorem ipsum dolor sit a',
                'email_opt_out' => 1,
                'client' => 1,
                'service_portal_access' => 1,
                'support_start_date' => '2018-05-16 14:53:17',
                'end_date_support' => '2018-05-16 14:53:17',
                'wilaya' => 'Lorem ipsum dolor sit a',
                'city' => 'Lorem ipsum dolor sit a',
                'created' => '2018-05-16 14:53:17',
                'modified' => '2018-05-16 14:53:17',
                'user_id' => 1,
                'contact_type_id' => 1,
                'lead_id' => 1,
                'source_prospect_id' => 1,
                'account_id' => 1,
                'statut_id' => 1,
                'secteur_id' => 1,
                'product_id' => 1
            ],
        ];
        parent::init();
    }
}
