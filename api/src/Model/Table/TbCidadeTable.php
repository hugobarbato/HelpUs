<?php
namespace App\Model\Table;

use App\Model\Entity\TbCidade;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbCidade Model
 *
 */
class TbCidadeTable extends Table
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

        $this->table('tb_cidade');
        $this->displayField('cd_cidade');
        $this->primaryKey('cd_cidade');
        
        $this->hasMany('tbBairro', [
            'className' => 'tbBairro'
        ]);
        $this->belongsTo('tbEstado', [
            'className' => 'tbEstado',
            'foreignKey' => 'cd_estado'
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
            ->integer('cd_cidade')
            ->allowEmpty('cd_cidade', 'create');

        $validator
            ->requirePresence('nm_cidade', 'create')
            ->notEmpty('nm_cidade');

        $validator
            ->integer('cd_estado')
            ->requirePresence('cd_estado', 'create')
            ->notEmpty('cd_estado');

        return $validator;
    }
}
