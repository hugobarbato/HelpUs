<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbProdutoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbProdutoTable Test Case
 */
class TbProdutoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbProdutoTable
     */
    public $TbProduto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_produto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbProduto') ? [] : ['className' => 'App\Model\Table\TbProdutoTable'];
        $this->TbProduto = TableRegistry::get('TbProduto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbProduto);

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
