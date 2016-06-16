<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;
/**
 * TbUsuario Entity.
 *
 * @property int $cd_usuario
 * @property string $nm_usuario
 * @property \Cake\I18n\Time $dt_nascimento
 * @property string $ic_sexo
 * @property string $nm_email
 * @property string $cd_senha
 * @property \Cake\I18n\Time $dt_cadastro
 * @property \Cake\I18n\Time $dt_ultimo_acesso
 * @property bool $ic_nivel
 * @property bool $active
 */
class TbUsuario extends Entity
{
   
   
   public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', 'Usuário é necessário')
            ->notEmpty('password', 'Senha é necessária')
            ->notEmpty('role', 'Função é necessária')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'author']],
                'message' => 'Por favor informe uma função válida'
            ]);
    }
    protected $_accessible = [
        '*' => true,
        'cd_usuario' => false,
    ];
    
}








