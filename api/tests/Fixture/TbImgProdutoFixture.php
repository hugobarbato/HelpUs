<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TbImgProdutoFixture
 *
 */
class TbImgProdutoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tb_img_produto';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cd_img' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nm_endereco' => ['type' => 'string', 'length' => 120, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'nm_extensao' => ['type' => 'string', 'fixed' => true, 'length' => 4, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'cd_produto' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_img_produto_idx' => ['type' => 'index', 'columns' => ['cd_produto'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cd_img'], 'length' => []],
            'fk_img_produto' => ['type' => 'foreign', 'columns' => ['cd_produto'], 'references' => ['tb_produto', 'cd_produto'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'cd_img' => 1,
            'nm_endereco' => 'Lorem ipsum dolor sit amet',
            'nm_extensao' => 'Lo',
            'cd_produto' => 1
        ],
    ];
}
