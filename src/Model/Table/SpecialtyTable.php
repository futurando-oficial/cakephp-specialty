<?php
namespace Specialty\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Specialty Model
 *
 * @method \Specialty\Model\Entity\Specialty get($primaryKey, $options = [])
 * @method \Specialty\Model\Entity\Specialty newEntity($data = null, array $options = [])
 * @method \Specialty\Model\Entity\Specialty[] newEntities(array $data, array $options = [])
 * @method \Specialty\Model\Entity\Specialty|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Specialty\Model\Entity\Specialty|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Specialty\Model\Entity\Specialty patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Specialty\Model\Entity\Specialty[] patchEntities($entities, array $data, array $options = [])
 * @method \Specialty\Model\Entity\Specialty findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SpecialtyTable extends Table
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

        $this->setTable('specialty');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmpty('image');

        $validator
            ->scalar('text')
            ->requirePresence('text', 'create')
            ->notEmpty('text');

        return $validator;
    }
}
