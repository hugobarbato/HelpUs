<?php
namespace App\Model\Table;

use App\Model\Entity\TbProduto;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbProduto Model
 *
 */
class TbProdutoTable extends Table
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

        $this->table('tb_produto');
        $this->displayField('cd_produto');
        $this->primaryKey('cd_produto');
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
            ->integer('cd_produto')
            ->allowEmpty('cd_produto', 'create');

        $validator
            ->integer('cd_categoria')
            ->requirePresence('cd_categoria', 'create')
            ->notEmpty('cd_categoria');

        $validator
            ->requirePresence('nm_produto', 'create')
            ->notEmpty('nm_produto');

        $validator
            ->requirePresence('ds_produto', 'create')
            ->notEmpty('ds_produto');

        $validator
            ->integer('qt_produto')
            ->requirePresence('qt_produto', 'create')
            ->notEmpty('qt_produto');

        $validator
            ->integer('cd_doacao')
            ->requirePresence('cd_doacao', 'create')
            ->notEmpty('cd_doacao');

        return $validator;
    }
}
