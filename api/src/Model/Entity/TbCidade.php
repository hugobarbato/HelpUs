<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbCidade Entity.
 *
 * @property int $cd_cidade
 * @property string $nm_cidade
 * @property int $cd_estado
 */
class TbCidade extends Entity
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
        'cd_cidade' => false,
    ];
}
