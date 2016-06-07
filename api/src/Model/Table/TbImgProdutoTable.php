<?php
namespace App\Model\Table;

use App\Model\Entity\TbImgProduto;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbImgProduto Model
 *
 */
class TbImgProdutoTable extends Table
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

        $this->table('tb_img_produto');
        $this->displayField('cd_img');
        $this->primaryKey('cd_img');
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
            ->integer('cd_img')
            ->allowEmpty('cd_img', 'create');

        $validator
            ->requirePresence('nm_endereco', 'create')
            ->notEmpty('nm_endereco');

        $validator
            ->requirePresence('nm_extensao', 'create')
            ->notEmpty('nm_extensao');

        $validator
            ->integer('cd_produto')
            ->requirePresence('cd_produto', 'create')
            ->notEmpty('cd_produto');

        return $validator;
    }
}
