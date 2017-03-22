<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbNoticiaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbNoticiaTable Test Case
 */
class TbNoticiaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbNoticiaTable
     */
    public $TbNoticia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_noticia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbNoticia') ? [] : ['className' => 'App\Model\Table\TbNoticiaTable'];
        $this->TbNoticia = TableRegistry::get('TbNoticia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbNoticia);

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
