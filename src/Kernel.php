<?php
namespace Continuity;

use Continuity\Interfaces\Node;
use \SplSubject;

final class Kernel extends Resource implements SplSubject
{
    public function __construct($argc = 0, $argv = 0)
    {
        parent::__construct();
    }

    private function execute(InputInterface $input, OutputInterface $output)
    {

    }

    public function attach(\SplObserver $observer)
    {

    }

    public function detach(SplObserver $observer)
    {

    }

    public function notify()
    {

    }
}