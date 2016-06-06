<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbEstadoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbEstadoTable Test Case
 */
class TbEstadoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbEstadoTable
     */
    public $TbEstado;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_estado'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbEstado') ? [] : ['className' => 'App\Model\Table\TbEstadoTable'];
        $this->TbEstado = TableRegistry::get('TbEstado', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbEstado);

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
