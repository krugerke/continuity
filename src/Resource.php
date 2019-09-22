<?php
namespace Continuity;

use Continuity\Interfaces\Node;
use Iterator;

abstract class Resource implements Node
{
    private static $resources;

    protected static function add(Node $node) : Node
    {

    }

    protected static function remove(Node $node) : Node
    {

    }

    abstract protected function setResourceContainer(Iterator $resource);
}