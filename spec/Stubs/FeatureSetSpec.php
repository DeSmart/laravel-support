<?php namespace spec\DeSmart\Support\Stubs;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FeatureSetSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Support\Stubs\FeatureSet');
    }
}
