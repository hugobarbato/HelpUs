<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbEnderecoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbEnderecoTable Test Case
 */
class TbEnderecoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbEnderecoTable
     */
    public $TbEndereco;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_endereco'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbEndereco') ? [] : ['className' => 'App\Model\Table\TbEnderecoTable'];
        $this->TbEndereco = TableRegistry::get('TbEndereco', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbEndereco);

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
