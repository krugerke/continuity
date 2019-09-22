<?php
namespace Continuity\Test;

use PHPUnit\Framework\TestCase;
use Continuity\ScratchPad;

class ScratchPadTest extends TestCase
{
    public function testRecursion()
    {
        $scratchPad = new ScratchPad();

        $scratchPad->recursion(1);
        echo "test";
        $this->assertTrue(true);
    }
}