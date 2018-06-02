<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Leads Model
 *
 * @property \App\Model\Table\SalePhasesTable|\Cake\ORM\Association\BelongsTo $SalePhases
 * @property \App\Model\Table\CampaignsTable|\Cake\ORM\Association\BelongsTo $Campaigns
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AccountsTable|\Cake\ORM\Association\BelongsTo $Accounts
 * @property \App\Model\Table\ContactsTable|\Cake\ORM\Association\BelongsTo $Contacts
 * @property \App\Model\Table\PaidToTable|\Cake\ORM\Association\BelongsTo $PaidTo
 * @property \App\Model\Table\SecteursTable|\Cake\ORM\Association\BelongsTo $Secteurs
 * @property \App\Model\Table\LeadsTable|\Cake\ORM\Association\BelongsTo $Leads
 * @property \App\Model\Table\SourceProspectsTable|\Cake\ORM\Association\BelongsTo $SourceProspects
 * @property \App\Model\Table\AccountsTable|\Cake\ORM\Association\HasMany $Accounts
 * @property \App\Model\Table\ContactsTable|\Cake\ORM\Association\HasMany $Contacts
 *
 * @method \App\Model\Entity\Lead get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lead newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lead[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lead|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lead patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lead[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lead findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LeadsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('leads');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('SalePhases', [
            'foreignKey' => 'sale_phase_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Campaigns', [
            'foreignKey' => 'campaign_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Accounts', [
            'foreignKey' => 'account_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Contacts', [
            'foreignKey' => 'contact_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('PaidTo', [
            'foreignKey' => 'paid_to_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Secteurs', [
            'foreignKey' => 'secteur_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Leads', [
            'foreignKey' => 'lead_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SourceProspects', [
            'foreignKey' => 'source_prospect_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Accounts', [
            'foreignKey' => 'lead_id'
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'lead_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name_lead')
            ->maxLength('name_lead', 255)
            ->requirePresence('name_lead', 'create')
            ->notEmpty('name_lead');

        $validator
            ->integer('forcecast_amount')
            ->requirePresence('forcecast_amount', 'create')
            ->notEmpty('forcecast_amount');

        $validator
            ->date('term')
            ->requirePresence('term', 'create')
            ->notEmpty('term');

        $validator
            ->scalar('next')
            ->maxLength('next', 255)
            ->requirePresence('next', 'create')
            ->notEmpty('next');

        $validator
            ->numeric('probability')
            ->requirePresence('probability', 'create')
            ->notEmpty('probability');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['sale_phase_id'], 'SalePhases'));
        $rules->add($rules->existsIn(['campaign_id'], 'Campaigns'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['account_id'], 'Accounts'));
        $rules->add($rules->existsIn(['contact_id'], 'Contacts'));
        $rules->add($rules->existsIn(['paid_to_id'], 'PaidTo'));
        $rules->add($rules->existsIn(['secteur_id'], 'Secteurs'));
        $rules->add($rules->existsIn(['lead_type_id'], 'Leads'));
        $rules->add($rules->existsIn(['source_prospect_id'], 'SourceProspects'));

        return $rules;
    }
}
