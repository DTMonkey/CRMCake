<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Accounts', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Campaigns', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Leads', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Notes', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('PaidTo', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Products', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Prospects', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('SalePhases', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Secteurs', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('SourceProspects', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Status', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('TypesContacts', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('TypesLeads', [
            'foreignKey' => 'user_id'
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
            ->scalar('full_name')
            ->maxLength('full_name', 255)
            ->requirePresence('full_name', 'create')
            ->notEmpty('full_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('confirm_password')
            ->maxLength('confirm_password', 255)
            ->requirePresence('confirm_password', 'create')
            ->notEmpty('confirm_password');


        return $validator;
    }

    //Check If alrdy exist Database
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email'], 'Email Already Exists'));
        $rules->add($rules->isUnique(['username'], 'Username Already Exists'));
        return $rules;
    }
     public function validationUpdate($validator)
    {
        //$validator = $this->validationDefault($validator);
        
   
        $validator
            ->notEmpty('full_name')
            ->notEmpty('username')
            //->email('email');
            ->notEmpty('email')
            ->lengthBetween('username', [4, 10])
            ->add('email', 'valid', [
            'rule' => 'email',
            'message' => 'Please enter valid mail'
            
        ]);

        
        
        
        $validator
        ->notEmpty('password')
        ->notEmpty('confirm_password')
        ->add('confirm_password', 'no-misspelling', [
            'rule' => ['compareWith', 'password'],
            'message' => 'Password are not equal',
        ]);

        return $validator;
    }

    public function isValidRole($value, array $context)
        {  
        return in_array($value, ['admin', 'staff', 'student'], true);
        }
    public function validationLogin($validator)
    {
     $validator
            
            
            
            ->add('email', 'valid', [
            'rule' => 'email',
            'message' => 'Please enter valid mail'
            
        ]);

                
        $validator
        ->notEmpty('password');
        
        return $validator;   
    }
}
