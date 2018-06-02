<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Secteurs Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AccountsTable|\Cake\ORM\Association\HasMany $Accounts
 * @property \App\Model\Table\ContactsTable|\Cake\ORM\Association\HasMany $Contacts
 * @property \App\Model\Table\LeadsTable|\Cake\ORM\Association\HasMany $Leads
 *
 * @method \App\Model\Entity\Secteur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Secteur newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Secteur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Secteur|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Secteur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Secteur[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Secteur findOrCreate($search, callable $callback = null, $options = [])
 */
class SecteursTable extends Table
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

        $this->setTable('secteurs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Accounts', [
            'foreignKey' => 'secteur_id'
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'secteur_id'
        ]);
        $this->hasMany('Leads', [
            'foreignKey' => 'secteur_id'
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
            ->scalar('name_secteur')
            ->maxLength('name_secteur', 25)
            ->allowEmpty('name_secteur');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
