<?php namespace spec\DeSmart\Support\Stubs;

use DeSmart\Support\Stubs\FeatureSet;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UuidFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Support\Stubs\UuidFactory');
    }

    function let(FeatureSet $featureSet)
    {
        $this->beConstructedWith($featureSet);
    }

    public function it_should_implement_uuid_factory_interface()
    {
        $this->shouldImplement('DeSmart\Support\Stubs\UuidFactoryInterface');
    }
}
