<?php
namespace App\Model\Table;

use App\Model\Entity\TbInstituicao;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbInstituicao Model
 *
 */
class TbInstituicaoTable extends Table
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

        $this->table('tb_instituicao');
        $this->displayField('cd_instituicao');
        $this->primaryKey('cd_instituicao');
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
            ->integer('cd_instituicao')
            ->allowEmpty('cd_instituicao', 'create');

        $validator
            ->requirePresence('nm_instituicao', 'create')
            ->notEmpty('nm_instituicao');

        $validator
            ->allowEmpty('ds_instituicao');

        $validator
            ->requirePresence('cd_cnpj', 'create')
            ->notEmpty('cd_cnpj')
            ->add('cd_cnpj', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('cd_categoria')
            ->requirePresence('cd_categoria', 'create')
            ->notEmpty('cd_categoria');

        $validator
            ->integer('cd_logo')
            ->allowEmpty('cd_logo');

        $validator
            ->integer('cd_bg')
            ->allowEmpty('cd_bg');

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
        $rules->add($rules->isUnique(['cd_cnpj']));
        return $rules;
    }
}
