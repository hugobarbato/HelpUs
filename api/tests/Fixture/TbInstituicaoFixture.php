<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TbInstituicaoFixture
 *
 */
class TbInstituicaoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tb_instituicao';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cd_instituicao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nm_instituicao' => ['type' => 'string', 'length' => 120, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ds_instituicao' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cd_cnpj' => ['type' => 'string', 'length' => 14, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cd_categoria' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cd_logo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cd_bg' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_instituicao_categoria_idx' => ['type' => 'index', 'columns' => ['cd_categoria'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cd_instituicao'], 'length' => []],
            'UK_CNPJ' => ['type' => 'unique', 'columns' => ['cd_cnpj'], 'length' => []],
            'fk_instituicao_categoria' => ['type' => 'foreign', 'columns' => ['cd_categoria'], 'references' => ['tb_categoria_instituicao', 'cd_categoria_instituicao'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'cd_instituicao' => 1,
            'nm_instituicao' => 'Lorem ipsum dolor sit amet',
            'ds_instituicao' => 'Lorem ipsum dolor sit amet',
            'cd_cnpj' => 'Lorem ipsum ',
            'cd_categoria' => 1,
            'cd_logo' => 1,
            'cd_bg' => 1
        ],
    ];
}
