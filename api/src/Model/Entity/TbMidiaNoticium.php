<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbMidiaNoticium Entity.
 *
 * @property int $cd_imgaem_noticia
 * @property string $nm_endereco
 * @property string $nm_extensao
 * @property int $cd_noticia
 */
class TbMidiaNoticium extends Entity
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
        'cd_imgaem_noticia' => false,
    ];
}
