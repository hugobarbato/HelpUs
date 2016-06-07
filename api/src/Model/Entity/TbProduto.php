<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbProduto Entity.
 *
 * @property int $cd_produto
 * @property int $cd_categoria
 * @property string $nm_produto
 * @property string $ds_produto
 * @property int $qt_produto
 * @property int $cd_doacao
 */
class TbProduto extends Entity
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
        'cd_produto' => false,
    ];
}
