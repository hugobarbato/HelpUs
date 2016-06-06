<?php
namespace App\Model\Table;

use Cake\Auth\DefaultPasswordHasher;
use App\Model\Entity\TbUsuario;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Utility\Text;
use Cake\Event\Event;

/**
 * TbUsuario Model
 *
 */
class TbUsuarioTable extends Table
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

        $this->table('tb_usuario');
        $this->displayField('cd_usuario');
        $this->primaryKey('cd_usuario');
        
        $this->hasMany('tbEndereco', [
            'className' => 'tbEndereco'
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
            ->integer('cd_usuario')
            ->allowEmpty('cd_usuario', 'create');

        $validator
            ->requirePresence('nm_usuario', 'create')
            ->notEmpty('nm_usuario');

        $validator
            ->date('dt_nascimento')
            ->requirePresence('dt_nascimento', 'create')
            ->notEmpty('dt_nascimento');

        $validator
            ->requirePresence('ic_sexo', 'create')
            ->notEmpty('ic_sexo');

        $validator
            ->requirePresence('nm_email', 'create')
            ->notEmpty('nm_email')
            ->add('nm_email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('cd_senha', 'create')
            ->notEmpty('cd_senha');

        $validator
            ->dateTime('dt_cadastro')
            ->requirePresence('dt_cadastro', 'create')
            ->notEmpty('dt_cadastro');

        $validator
            ->dateTime('dt_ultimo_acesso')
            ->allowEmpty('dt_ultimo_acesso');

        $validator
            ->requirePresence('ic_nivel', 'create')
            ->notEmpty('ic_nivel');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['nm_email']));
        return $rules;
    }
    
    public function beforeSave(Event $event) {
        $entity = $event->data['entity'];
        if ($entity->isNew()) {
            $hasher = new DefaultPasswordHasher();
            $entity->cd_senha = $hasher->hash($entity->cd_senha);
        }
        return true;
    }
    
}
