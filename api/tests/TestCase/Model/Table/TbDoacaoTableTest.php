<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbDoacaoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbDoacaoTable Test Case
 */
class TbDoacaoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbDoacaoTable
     */
    public $TbDoacao;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_doacao'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbDoacao') ? [] : ['className' => 'App\Model\Table\TbDoacaoTable'];
        $this->TbDoacao = TableRegistry::get('TbDoacao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbDoacao);

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
