<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbEndereco Entity.
 *
 * @property int $cd_endereco
 * @property int $cd_instituicao
 * @property string $cd_cep
 * @property string $nm_endereco
 * @property string $nm_numero
 * @property string $nm_complemento
 * @property int $cd_bairro
 * @property int $cd_usuario
 */
class TbEndereco extends Entity
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
        'cd_endereco' => false,
    ];
}
