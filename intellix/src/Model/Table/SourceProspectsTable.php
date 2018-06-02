<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SourceProspects Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ContactsTable|\Cake\ORM\Association\HasMany $Contacts
 * @property \App\Model\Table\LeadsTable|\Cake\ORM\Association\HasMany $Leads
 * @property \App\Model\Table\ProspectsTable|\Cake\ORM\Association\HasMany $Prospects
 *
 * @method \App\Model\Entity\SourceProspect get($primaryKey, $options = [])
 * @method \App\Model\Entity\SourceProspect newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SourceProspect[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SourceProspect|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SourceProspect patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SourceProspect[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SourceProspect findOrCreate($search, callable $callback = null, $options = [])
 */
class SourceProspectsTable extends Table
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

        $this->setTable('source_prospects');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'source_prospect_id'
        ]);
        $this->hasMany('Leads', [
            'foreignKey' => 'source_prospect_id'
        ]);
        $this->hasMany('Prospects', [
            'foreignKey' => 'source_prospect_id'
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
            ->scalar('name_prospect')
            ->maxLength('name_prospect', 25)
            ->allowEmpty('name_prospect');

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
