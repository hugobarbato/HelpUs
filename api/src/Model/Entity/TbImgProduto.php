<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbImgProduto Entity.
 *
 * @property int $cd_img
 * @property string $nm_endereco
 * @property string $nm_extensao
 * @property int $cd_produto
 */
class TbImgProduto extends Entity
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
        'cd_img' => false,
    ];
}
