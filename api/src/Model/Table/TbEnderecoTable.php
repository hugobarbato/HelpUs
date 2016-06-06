<?php
namespace App\Model\Table;

use App\Model\Entity\TbEndereco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbEndereco Model
 *
 */
class TbEnderecoTable extends Table
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

        $this->table('tb_endereco');
        $this->displayField('cd_endereco');
        $this->primaryKey('cd_endereco');
        
        $this->belongsTo('tbBairro', [
            'className' => 'tbBairro',
            'foreignKey' => 'cd_bairro'
        ]);
        $this->belongsTo('tbUsuario', [
            'className' => 'tbUsuario',
            'foreignKey' => 'cd_usuario'
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
            ->integer('cd_endereco')
            ->allowEmpty('cd_endereco', 'create');

        $validator
            ->integer('cd_instituicao')
            ->allowEmpty('cd_instituicao');

        $validator
            ->requirePresence('cd_cep', 'create')
            ->notEmpty('cd_cep');

        $validator
            ->requirePresence('nm_endereco', 'create')
            ->notEmpty('nm_endereco');

        $validator
            ->requirePresence('nm_numero', 'create')
            ->notEmpty('nm_numero');

        $validator
            ->allowEmpty('nm_complemento');

        $validator
            ->integer('cd_bairro')
            ->requirePresence('cd_bairro', 'create')
            ->notEmpty('cd_bairro');

        $validator
            ->integer('cd_usuario')
            ->requirePresence('cd_usuario', 'create')
            ->notEmpty('cd_usuario');

        return $validator;
    }
}
