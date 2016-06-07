<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TbProdutoFixture
 *
 */
class TbProdutoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tb_produto';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cd_produto' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cd_categoria' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nm_produto' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ds_produto' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'qt_produto' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cd_doacao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_categoria_produto_idx' => ['type' => 'index', 'columns' => ['cd_categoria'], 'length' => []],
            'fk_produto_doacao_idx' => ['type' => 'index', 'columns' => ['cd_doacao'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cd_produto'], 'length' => []],
            'fk_categoria_produto' => ['type' => 'foreign', 'columns' => ['cd_categoria'], 'references' => ['tb_categoria_produto', 'cd_categoria_produto'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_produto_doacao' => ['type' => 'foreign', 'columns' => ['cd_doacao'], 'references' => ['tb_doacao', 'cd_doacao'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'cd_produto' => 1,
            'cd_categoria' => 1,
            'nm_produto' => 'Lorem ipsum dolor sit amet',
            'ds_produto' => 'Lorem ipsum dolor sit amet',
            'qt_produto' => 1,
            'cd_doacao' => 1
        ],
    ];
}
