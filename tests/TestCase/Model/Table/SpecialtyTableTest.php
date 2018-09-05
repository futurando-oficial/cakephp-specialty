<?php
namespace Specialty\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Specialty\Model\Table\SpecialtyTable;

/**
 * Specialty\Model\Table\SpecialtyTable Test Case
 */
class SpecialtyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Specialty\Model\Table\SpecialtyTable
     */
    public $Specialty;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.specialty.specialty'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Specialty') ? [] : ['className' => SpecialtyTable::class];
        $this->Specialty = TableRegistry::getTableLocator()->get('Specialty', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Specialty);

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
