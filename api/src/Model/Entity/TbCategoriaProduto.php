<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbCategoriaProduto Entity.
 *
 * @property int $cd_categoria_produto
 * @property string $nm_categoria_produto
 * @property string $sg_categoria_produto
 */
class TbCategoriaProduto extends Entity
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
        'cd_categoria_produto' => false,
    ];
}
