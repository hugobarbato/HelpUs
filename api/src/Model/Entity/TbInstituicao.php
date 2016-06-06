<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbInstituicao Entity.
 *
 * @property int $cd_instituicao
 * @property string $nm_instituicao
 * @property string $ds_instituicao
 * @property string $cd_cnpj
 * @property int $cd_categoria
 * @property int $cd_logo
 * @property int $cd_bg
 */
class TbInstituicao extends Entity
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
        'cd_instituicao' => false,
    ];
}
