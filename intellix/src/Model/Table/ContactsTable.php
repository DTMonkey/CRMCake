<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contacts Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ContactsTable|\Cake\ORM\Association\BelongsTo $Contacts
 * @property \App\Model\Table\LeadsTable|\Cake\ORM\Association\BelongsTo $Leads
 * @property \App\Model\Table\SourceProspectsTable|\Cake\ORM\Association\BelongsTo $SourceProspects
 * @property \App\Model\Table\AccountsTable|\Cake\ORM\Association\BelongsTo $Accounts
 * @property \App\Model\Table\StatusTable|\Cake\ORM\Association\BelongsTo $Status
 * @property \App\Model\Table\SecteursTable|\Cake\ORM\Association\BelongsTo $Secteurs
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\AccountsTable|\Cake\ORM\Association\HasMany $Accounts
 * @property \App\Model\Table\LeadsTable|\Cake\ORM\Association\HasMany $Leads
 *
 * @method \App\Model\Entity\Contact get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contact newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contact[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contact|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contact patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contact[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contact findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContactsTable extends Table
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

        $this->setTable('contacts');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Contacts', [
            'foreignKey' => 'contact_type_id'
        ]);
        $this->belongsTo('Leads', [
            'foreignKey' => 'lead_id'
        ]);
        $this->belongsTo('SourceProspects', [
            'foreignKey' => 'source_prospect_id'
        ]);
        $this->belongsTo('Accounts', [
            'foreignKey' => 'account_id'
        ]);
        $this->belongsTo('Status', [
            'foreignKey' => 'statut_id'
        ]);
        $this->belongsTo('Secteurs', [
            'foreignKey' => 'secteur_id'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('Accounts', [
            'foreignKey' => 'contact_id'
        ]);
        $this->hasMany('Leads', [
            'foreignKey' => 'contact_id'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmpty('name');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 25)
            ->allowEmpty('phone');

        $validator
            ->integer('mobile')
            ->allowEmpty('mobile');

        $validator
            ->integer('other_phone')
            ->allowEmpty('other_phone');

        $validator
            ->integer('fax')
            ->allowEmpty('fax');

        $validator
            ->allowEmpty('do_not_call');

        $validator
            ->scalar('interested_in')
            ->maxLength('interested_in', 255)
            ->allowEmpty('interested_in');

        $validator
            ->allowEmpty('notify_owner');

        $validator
            ->allowEmpty('referent');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 25)
            ->allowEmpty('first_name');

        $validator
            ->scalar('entreprise')
            ->maxLength('entreprise', 255)
            ->allowEmpty('entreprise');

        $validator
            ->scalar('fonction')
            ->maxLength('fonction', 25)
            ->allowEmpty('fonction');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('assistant')
            ->maxLength('assistant', 25)
            ->allowEmpty('assistant');

        $validator
            ->allowEmpty('email_opt_out');

        $validator
            ->allowEmpty('client');

        $validator
            ->allowEmpty('service_portal_access');

        $validator
            ->dateTime('support_start_date')
            ->allowEmpty('support_start_date');

        $validator
            ->dateTime('end_date_support')
            ->allowEmpty('end_date_support');

        $validator
            ->scalar('wilaya')
            ->maxLength('wilaya', 25)
            ->allowEmpty('wilaya');

        $validator
            ->scalar('city')
            ->maxLength('city', 25)
            ->allowEmpty('city');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['contact_type_id'], 'Contacts'));
        $rules->add($rules->existsIn(['lead_id'], 'Leads'));
        $rules->add($rules->existsIn(['source_prospect_id'], 'SourceProspects'));
        $rules->add($rules->existsIn(['account_id'], 'Accounts'));
        $rules->add($rules->existsIn(['statut_id'], 'Status'));
        $rules->add($rules->existsIn(['secteur_id'], 'Secteurs'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));

        return $rules;
    }
}
