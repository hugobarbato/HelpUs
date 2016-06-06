<?php
namespace App\Model\Table;

use App\Model\Entity\TbBairro;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbBairro Model
 *
 */
class TbBairroTable extends Table
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

        $this->table('tb_bairro');
        $this->displayField('cd_bairro');
        $this->primaryKey('cd_bairro');
        
        $this->hasMany('tbEndereco', [
            'className' => 'tbEndereco'
        ]);
        $this->belongsTo('tbCidade', [
            'className' => 'tbCidade',
            'foreignKey' => 'cd_cidade'
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
            ->integer('cd_bairro')
            ->allowEmpty('cd_bairro', 'create');

        $validator
            ->requirePresence('nm_bairro', 'create')
            ->notEmpty('nm_bairro');

        $validator
            ->integer('cd_cidade')
            ->requirePresence('cd_cidade', 'create')
            ->notEmpty('cd_cidade');

        return $validator;
    }
}
