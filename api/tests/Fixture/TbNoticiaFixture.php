<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TbNoticiaFixture
 *
 */
class TbNoticiaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tb_noticia';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cd_noticia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nm_titulo_noticia' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'nm_subtitulo_noticia' => ['type' => 'string', 'length' => 120, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ds_noticia' => ['type' => 'string', 'length' => 1000, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'nm_tags' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'nm_local' => ['type' => 'string', 'fixed' => true, 'length' => 8, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'dt_noticia' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'cd_instituicao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_noticia_instituicao_idx' => ['type' => 'index', 'columns' => ['cd_instituicao'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cd_noticia'], 'length' => []],
            'fk_noticia_instituicao' => ['type' => 'foreign', 'columns' => ['cd_instituicao'], 'references' => ['tb_instituicao', 'cd_instituicao'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'cd_noticia' => 1,
            'nm_titulo_noticia' => 'Lorem ipsum dolor sit amet',
            'nm_subtitulo_noticia' => 'Lorem ipsum dolor sit amet',
            'ds_noticia' => 'Lorem ipsum dolor sit amet',
            'nm_tags' => 'Lorem ipsum dolor sit amet',
            'nm_local' => 'Lorem ',
            'dt_noticia' => '2016-06-21',
            'cd_instituicao' => 1
        ],
    ];
}
