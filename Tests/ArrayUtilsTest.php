<?php

namespace LAG\Component\ArrayUtils\Tests;

use PHPUnit_Framework_TestCase;

/**
 * Class ArrayUtilsTest.
 */
class ArrayUtilsTest extends PHPUnit_Framework_TestCase
{
    public function testRecursiveImplode()
    {
        $flatArray = [1, 2, 3, 4];
        $this->assertEquals(implode(',', $flatArray), recursiveImplode(',', $flatArray));

        $deepArray = [1, 2, [1, 2, 3, 4]];
        $this->assertEquals('1, 2, 1, 2, 3, 4', recursiveImplode(', ', $deepArray));
    }
}
