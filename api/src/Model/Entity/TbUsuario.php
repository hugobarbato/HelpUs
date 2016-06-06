<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

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

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'cd_usuario' => false,
    ];
}
