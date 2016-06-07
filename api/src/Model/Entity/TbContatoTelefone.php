<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbContatoTelefone Entity.
 *
 * @property int $cd_contato_telefone
 * @property string $nm_telefone
 * @property int $cd_usuario
 * @property int $cd_instituicao
 */
class TbContatoTelefone extends Entity
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
        'cd_contato_telefone' => false,
    ];
}
