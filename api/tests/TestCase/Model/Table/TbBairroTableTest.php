<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbBairroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbBairroTable Test Case
 */
class TbBairroTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbBairroTable
     */
    public $TbBairro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_bairro'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbBairro') ? [] : ['className' => 'App\Model\Table\TbBairroTable'];
        $this->TbBairro = TableRegistry::get('TbBairro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbBairro);

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
