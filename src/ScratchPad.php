<?php
namespace Continuity;


class ScratchPad
{
    public function __construct($argc = 0, $argv = 0)
    {

    }

    public function recursion( $input = null )
    {
        echo $input.PHP_EOL;
        yield $input;

        if($input === 10)
        {
            return $input;
        }

        ++$input;

        $this->recursion($input);
    }
}