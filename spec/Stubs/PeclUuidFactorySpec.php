<?php namespace spec\DeSmart\Support\Stubs;

use DeSmart\Support\Stubs\UuidFactory;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PeclUuidFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Support\Stubs\PeclUuidFactory');
    }

    function let(UuidFactory $uuidFactory)
    {
        $this->beConstructedWith($uuidFactory);
    }

    public function it_should_implement_uuid_factory_interface()
    {
        $this->shouldImplement('DeSmart\Support\Stubs\UuidFactoryInterface');
    }
}
