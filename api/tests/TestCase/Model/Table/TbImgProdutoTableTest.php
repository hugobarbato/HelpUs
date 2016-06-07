<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbImgProdutoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbImgProdutoTable Test Case
 */
class TbImgProdutoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbImgProdutoTable
     */
    public $TbImgProduto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_img_produto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbImgProduto') ? [] : ['className' => 'App\Model\Table\TbImgProdutoTable'];
        $this->TbImgProduto = TableRegistry::get('TbImgProduto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbImgProduto);

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
