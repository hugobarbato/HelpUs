<?php
namespace App\Model\Table;

use App\Model\Entity\TbDoacao;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbDoacao Model
 *
 */
class TbDoacaoTable extends Table
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

        $this->table('tb_doacao');
        $this->displayField('cd_doacao');
        $this->primaryKey('cd_doacao');
        
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
            ->integer('cd_doacao')
            ->allowEmpty('cd_doacao', 'create');

        $validator
            ->dateTime('dt_fornecimento_doacao')
            ->requirePresence('dt_fornecimento_doacao', 'create')
            ->notEmpty('dt_fornecimento_doacao');

        $validator
            ->requirePresence('ic_ofertado', 'create')
            ->notEmpty('ic_ofertado');

        $validator
            ->dateTime('dt_recebimento_doacao')
            ->allowEmpty('dt_recebimento_doacao');

        $validator
            ->integer('cd_instituicao')
            ->allowEmpty('cd_instituicao');

        $validator
            ->integer('cd_usuario')
            ->requirePresence('cd_usuario', 'create')
            ->notEmpty('cd_usuario');

        return $validator;
    }
}
