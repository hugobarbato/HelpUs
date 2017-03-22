<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbNoticium Entity.
 *
 * @property int $cd_noticia
 * @property string $nm_titulo_noticia
 * @property string $nm_subtitulo_noticia
 * @property string $ds_noticia
 * @property string $nm_tags
 * @property string $nm_local
 * @property \Cake\I18n\Time $dt_noticia
 * @property int $cd_instituicao
 */
class TbNoticium extends Entity
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
        'cd_noticia' => false,
    ];
}
