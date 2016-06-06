<?php
namespace App\Model\Table;

use App\Model\Entity\TbEstado;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbEstado Model
 *
 */
class TbEstadoTable extends Table
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

        $this->table('tb_estado');
        $this->displayField('cd_estado');
        $this->primaryKey('cd_estado');
        
        $this->hasMany('tbCidade', [
            'className' => 'tbCidade'
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
            ->integer('cd_estado')
            ->allowEmpty('cd_estado', 'create');

        $validator
            ->requirePresence('nm_estado', 'create')
            ->notEmpty('nm_estado');

        $validator
            ->requirePresence('sg_estado', 'create')
            ->notEmpty('sg_estado');

        return $validator;
    }
}
