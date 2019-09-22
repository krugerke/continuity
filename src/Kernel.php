<?php
namespace Continuity;

use Continuity\Interfaces\Node;
use Iterator;

final class Kernel extends Resource
{
    public function __construct($argc = 0, $argv = 0)
    {
        $this->setResourceContainer(new \SplObjectStorage());
    }

    private function execute(InputInterface $input, OutputInterface $output)
    {

    }

    public function run()
    {

    }

    protected function setResourceContainer(Iterator $resource)
    {

    }
}