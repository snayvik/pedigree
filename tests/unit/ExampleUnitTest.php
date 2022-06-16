<?php
/**
 * pedigree plugin for Craft CMS 3.x
 *
 * Creating pedigree structure
 *
 * @link      https://snayvik.com
 * @copyright Copyright (c) 2022 Vinod Patidar
 */

namespace snvk\pedigreetests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use snvk\pedigree\Pedigree;

/**
 * ExampleUnitTest
 *
 *
 * @author    Vinod Patidar
 * @package   Pedigree
 * @since     1.0.0
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            Pedigree::class,
            Pedigree::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
