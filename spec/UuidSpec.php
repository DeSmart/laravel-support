<?php namespace spec\DeSmart\Support;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;
use Ramsey\Uuid\UuidFactoryInterface;

class UuidSpec extends ObjectBehavior
{
    function let(UuidFactoryInterface $factory)
    {
        $this->beConstructedWith($factory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Support\Uuid');
    }

    public function it_should_generate_ordered_uuid(UuidFactoryInterface $factory)
    {
        $factory->uuid1()->willReturn('a8098c1a-f86e-11da-bd1a-00112444be1e');
        $this->generateOrderedUuid1()->shouldReturn('11daf86ea8098c1abd1a00112444be1e');
    }
}