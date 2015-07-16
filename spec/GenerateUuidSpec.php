<?php namespace spec\DeSmart\Support;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;

class GenerateUuidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Support\GenerateUuid');
    }

    public function it_should_generate_uuid()
    {
        $this->generateUuid1()->shouldBeString();
    }

    public function it_should_generate_ordered_uuid()
    {
        $this->generateOrderedUuid1()->shouldBeString();
    }
}