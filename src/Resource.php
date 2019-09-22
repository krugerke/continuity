<?php
namespace Continuity;

use Continuity\Interfaces\Node;
use \SplObserver;
use \SplObjectStorage;

abstract class Resource extends SplObjectStorage implements Node, SplObserver
{
    public function __construct($argc = 0, $argv = 0)
    {

    }

    protected static function add(Node $node) : Node
    {

    }

    protected static function remove(Node $node) : Node
    {

    }

    public function update(\SplSubject $subject)
    {

    }
}