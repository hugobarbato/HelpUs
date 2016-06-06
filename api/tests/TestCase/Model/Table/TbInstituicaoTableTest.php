<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbInstituicaoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbInstituicaoTable Test Case
 */
class TbInstituicaoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbInstituicaoTable
     */
    public $TbInstituicao;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_instituicao'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbInstituicao') ? [] : ['className' => 'App\Model\Table\TbInstituicaoTable'];
        $this->TbInstituicao = TableRegistry::get('TbInstituicao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbInstituicao);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
