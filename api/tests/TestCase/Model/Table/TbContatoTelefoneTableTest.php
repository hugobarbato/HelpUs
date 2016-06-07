<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbContatoTelefoneTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbContatoTelefoneTable Test Case
 */
class TbContatoTelefoneTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbContatoTelefoneTable
     */
    public $TbContatoTelefone;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_contato_telefone'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbContatoTelefone') ? [] : ['className' => 'App\Model\Table\TbContatoTelefoneTable'];
        $this->TbContatoTelefone = TableRegistry::get('TbContatoTelefone', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbContatoTelefone);

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
