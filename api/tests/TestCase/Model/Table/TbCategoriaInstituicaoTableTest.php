<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbCategoriaInstituicaoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbCategoriaInstituicaoTable Test Case
 */
class TbCategoriaInstituicaoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbCategoriaInstituicaoTable
     */
    public $TbCategoriaInstituicao;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_categoria_instituicao'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbCategoriaInstituicao') ? [] : ['className' => 'App\Model\Table\TbCategoriaInstituicaoTable'];
        $this->TbCategoriaInstituicao = TableRegistry::get('TbCategoriaInstituicao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbCategoriaInstituicao);

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
