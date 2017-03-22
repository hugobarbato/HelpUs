<?php
namespace App\Model\Table;

use App\Model\Entity\TbCategoriaInstituicao;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbCategoriaInstituicao Model
 *
 */
class TbCategoriaInstituicaoTable extends Table
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

        $this->table('tb_categoria_instituicao');
        $this->displayField('cd_categoria_instituicao');
        $this->primaryKey('cd_categoria_instituicao');
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
            ->integer('cd_categoria_instituicao')
            ->allowEmpty('cd_categoria_instituicao', 'create');

        $validator
            ->requirePresence('nm_categoria_instituicao', 'create')
            ->notEmpty('nm_categoria_instituicao');

        return $validator;
    }
}
