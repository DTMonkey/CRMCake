<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prospects Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\SourceProspectsTable|\Cake\ORM\Association\BelongsTo $SourceProspects
 * @property \App\Model\Table\StatusTable|\Cake\ORM\Association\BelongsTo $Status
 *
 * @method \App\Model\Entity\Prospect get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prospect newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Prospect[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prospect|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prospect patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prospect[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prospect findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProspectsTable extends Table
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

        $this->setTable('prospects');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('SourceProspects', [
            'foreignKey' => 'source_prospect_id'

        ]);
        $this->belongsTo('Status', [
            'foreignKey' => 'statut_id'

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
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->allowEmpty('first_name');

        $validator
            ->integer('phone')
            ->allowEmpty('phone');

        $validator
            ->scalar('society')
            ->maxLength('society', 255)
            ->allowEmpty('society');

        $validator
            ->integer('mobile')
            ->allowEmpty('mobile');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('web_site')
            ->maxLength('web_site', 255)
            ->allowEmpty('web_site');

        $validator
            ->scalar('city')
            ->maxLength('city', 25)
            ->allowEmpty('city');

        $validator
            ->integer('fax')
            ->allowEmpty('fax');

        $validator
            ->allowEmpty('email_opt_out');

        $validator
            ->scalar('title')
            ->maxLength('title', 25)
            ->allowEmpty('title');

        $validator
            ->scalar('other_sector')
            ->maxLength('other_sector', 255)
            ->allowEmpty('other_sector');

        $validator
            ->scalar('effective')
            ->maxLength('effective', 25)
            ->allowEmpty('effective');

        $validator
            ->scalar('secondary_email')
            ->maxLength('secondary_email', 255)
            ->allowEmpty('secondary_email');

        $validator
            ->scalar('pobox')
            ->maxLength('pobox', 255)
            ->allowEmpty('pobox');

        $validator
            ->scalar('wilaya')
            ->maxLength('wilaya', 25)
            ->allowEmpty('wilaya');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['source_prospect_id'], 'SourceProspects'));
        $rules->add($rules->existsIn(['statut_id'], 'Status'));

        return $rules;
    }
}
