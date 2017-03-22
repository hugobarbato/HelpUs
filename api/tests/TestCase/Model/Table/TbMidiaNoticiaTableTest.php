<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbMidiaNoticiaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbMidiaNoticiaTable Test Case
 */
class TbMidiaNoticiaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbMidiaNoticiaTable
     */
    public $TbMidiaNoticia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_midia_noticia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbMidiaNoticia') ? [] : ['className' => 'App\Model\Table\TbMidiaNoticiaTable'];
        $this->TbMidiaNoticia = TableRegistry::get('TbMidiaNoticia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbMidiaNoticia);

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
