<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbCategoriaProdutoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbCategoriaProdutoTable Test Case
 */
class TbCategoriaProdutoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbCategoriaProdutoTable
     */
    public $TbCategoriaProduto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_categoria_produto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbCategoriaProduto') ? [] : ['className' => 'App\Model\Table\TbCategoriaProdutoTable'];
        $this->TbCategoriaProduto = TableRegistry::get('TbCategoriaProduto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbCategoriaProduto);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
