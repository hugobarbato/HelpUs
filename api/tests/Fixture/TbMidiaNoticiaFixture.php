<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TbMidiaNoticiaFixture
 *
 */
class TbMidiaNoticiaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tb_midia_noticia';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cd_imgaem_noticia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nm_endereco' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'nm_extensao' => ['type' => 'string', 'fixed' => true, 'length' => 4, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'cd_noticia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_imagem_noticia_idx' => ['type' => 'index', 'columns' => ['cd_noticia'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cd_imgaem_noticia'], 'length' => []],
            'fk_imagem_noticia' => ['type' => 'foreign', 'columns' => ['cd_noticia'], 'references' => ['tb_noticia', 'cd_noticia'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'cd_imgaem_noticia' => 1,
            'nm_endereco' => 'Lorem ipsum dolor sit amet',
            'nm_extensao' => 'Lo',
            'cd_noticia' => 1
        ],
    ];
}
