<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbDoacao Entity.
 *
 * @property int $cd_doacao
 * @property \Cake\I18n\Time $dt_fornecimento_doacao
 * @property string $ic_ofertado
 * @property \Cake\I18n\Time $dt_recebimento_doacao
 * @property int $cd_instituicao
 * @property int $cd_usuario
 */
class TbDoacao extends Entity
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
        'cd_doacao' => false,
    ];
}
