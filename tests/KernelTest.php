<?php
namespace Continuity\Test;

use PHPUnit\Framework\TestCase;
use Continuity\Resource;
class KernelTest extends TestCase
{
    public function testRun()
    {
        $kernel = new Resource();

        $kernel->run();

        $this->assertTrue(true);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
