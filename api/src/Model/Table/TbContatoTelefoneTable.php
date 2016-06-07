<?php
namespace App\Model\Table;

use App\Model\Entity\TbContatoTelefone;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbContatoTelefone Model
 *
 */
class TbContatoTelefoneTable extends Table
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

        $this->table('tb_contato_telefone');
        $this->displayField('cd_contato_telefone');
        $this->primaryKey('cd_contato_telefone');
        
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
            ->integer('cd_contato_telefone')
            ->allowEmpty('cd_contato_telefone', 'create');

        $validator
            ->requirePresence('nm_telefone', 'create')
            ->notEmpty('nm_telefone');

        $validator
            ->integer('cd_usuario')
            ->requirePresence('cd_usuario', 'create')
            ->notEmpty('cd_usuario');

        $validator
            ->integer('cd_instituicao')
            ->allowEmpty('cd_instituicao');

        return $validator;
    }
}
