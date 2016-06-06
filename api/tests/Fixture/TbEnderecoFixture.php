<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TbEnderecoFixture
 *
 */
class TbEnderecoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tb_endereco';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cd_endereco' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cd_instituicao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cd_cep' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'nm_endereco' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'nm_numero' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'nm_complemento' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cd_bairro' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cd_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_endereco_bairro_idx' => ['type' => 'index', 'columns' => ['cd_bairro'], 'length' => []],
            'fk_endereco_usuario_idx' => ['type' => 'index', 'columns' => ['cd_usuario'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cd_endereco'], 'length' => []],
            'fk_endereco_bairro' => ['type' => 'foreign', 'columns' => ['cd_bairro'], 'references' => ['tb_bairro', 'cd_bairro'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_endereco_usuario' => ['type' => 'foreign', 'columns' => ['cd_usuario'], 'references' => ['tb_usuario', 'cd_usuario'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'cd_endereco' => 1,
            'cd_instituicao' => 1,
            'cd_cep' => 'Lorem ipsum dolor sit amet',
            'nm_endereco' => 'Lorem ipsum dolor sit amet',
            'nm_numero' => 'Lorem ipsum dolor sit amet',
            'nm_complemento' => 'Lorem ipsum dolor sit amet',
            'cd_bairro' => 1,
            'cd_usuario' => 1
        ],
    ];
}
