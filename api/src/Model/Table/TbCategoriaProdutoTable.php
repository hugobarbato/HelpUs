<?php
namespace App\Model\Table;

use App\Model\Entity\TbCategoriaProduto;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbCategoriaProduto Model
 *
 */
class TbCategoriaProdutoTable extends Table
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

        $this->table('tb_categoria_produto');
        $this->displayField('cd_categoria_produto');
        $this->primaryKey('cd_categoria_produto');
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
            ->integer('cd_categoria_produto')
            ->allowEmpty('cd_categoria_produto', 'create');

        $validator
            ->requirePresence('nm_categoria_produto', 'create')
            ->notEmpty('nm_categoria_produto');

        $validator
            ->requirePresence('sg_categoria_produto', 'create')
            ->notEmpty('sg_categoria_produto');

        return $validator;
    }
}
