<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accounts Model
 *
 * @property \App\Model\Table\AccountsTable|\Cake\ORM\Association\BelongsTo $Accounts
 * @property \App\Model\Table\NotesTable|\Cake\ORM\Association\BelongsTo $Notes
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\LeadsTable|\Cake\ORM\Association\BelongsTo $Leads
 * @property \App\Model\Table\ContactsTable|\Cake\ORM\Association\BelongsTo $Contacts
 * @property \App\Model\Table\SecteursTable|\Cake\ORM\Association\BelongsTo $Secteurs
 * @property \App\Model\Table\AccountsTable|\Cake\ORM\Association\HasMany $Accounts
 * @property \App\Model\Table\ContactsTable|\Cake\ORM\Association\HasMany $Contacts
 * @property \App\Model\Table\LeadsTable|\Cake\ORM\Association\HasMany $Leads
 *
 * @method \App\Model\Entity\Account get($primaryKey, $options = [])
 * @method \App\Model\Entity\Account newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Account[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Account|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Account patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Account[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Account findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AccountsTable extends Table
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

        $this->setTable('accounts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Accounts', [
            'foreignKey' => 'account_id'
        ]);
        $this->belongsTo('Notes', [
            'foreignKey' => 'note_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Leads', [
            'foreignKey' => 'lead_id'
        ]);
        $this->belongsTo('Contacts', [
            'foreignKey' => 'contact_id'
        ]);
        $this->belongsTo('Secteurs', [
            'foreignKey' => 'secteur_id'
        ]);
        $this->hasMany('Accounts', [
            'foreignKey' => 'account_id'
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'account_id'
        ]);
        $this->hasMany('Leads', [
            'foreignKey' => 'account_id'
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
            ->scalar('name_account')
            ->maxLength('name_account', 255)
            ->allowEmpty('name_account');

        $validator
            ->integer('phone')
            ->allowEmpty('phone');

        $validator
            ->scalar('effective')
            ->maxLength('effective', 255)
            ->allowEmpty('effective');

        $validator
            ->scalar('other_email')
            ->maxLength('other_email', 255)
            ->allowEmpty('other_email');

        $validator
            ->allowEmpty('email_opt_out');

        $validator
            ->scalar('web_site')
            ->maxLength('web_site', 255)
            ->allowEmpty('web_site');

        $validator
            ->integer('fax')
            ->allowEmpty('fax');

        $validator
            ->integer('other_phone')
            ->allowEmpty('other_phone');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('owner')
            ->maxLength('owner', 255)
            ->allowEmpty('owner');

        $validator
            ->scalar('code_ape')
            ->maxLength('code_ape', 255)
            ->allowEmpty('code_ape');

        $validator
            ->integer('annual_revenue')
            ->allowEmpty('annual_revenue');

        $validator
            ->allowEmpty('notify_owner');

        $validator
            ->scalar('billing_addres')
            ->maxLength('billing_addres', 255)
            ->allowEmpty('billing_addres');

        $validator
            ->scalar('delivery_address')
            ->maxLength('delivery_address', 255)
            ->allowEmpty('delivery_address');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmpty('description');

        $validator
            ->scalar('comments')
            ->maxLength('comments', 255)
            ->allowEmpty('comments');

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
        $rules->add($rules->existsIn(['account_id'], 'Accounts'));
        $rules->add($rules->existsIn(['note_id'], 'Notes'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['lead_id'], 'Leads'));
        $rules->add($rules->existsIn(['contact_id'], 'Contacts'));
        $rules->add($rules->existsIn(['secteur_id'], 'Secteurs'));

        return $rules;
    }
}
