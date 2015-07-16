<?php namespace spec\DeSmart\Support;

use DeSmart\Support\Stubs\FeatureSet;
use DeSmart\Support\Stubs\PeclUuidFactory;
use DeSmart\Support\Stubs\UuidFactory;
use Prophecy\Argument;
use PhpSpec\ObjectBehavior;

class GenerateUuidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Support\GenerateUuid');
    }

    public function it_should_create_uuid_factory()
    {
        $featureSet = new FeatureSet;

        $uuidFactory = new UuidFactory($featureSet);
        $uuidFactory->shouldHaveType('DeSmart\Support\stubs\UuidFactory');
        $uuidFactory->shouldImplement('DeSmart\Support\stubs\UuidFactoryInterface');

        $peclFactory = new PeclUuidFactory($uuidFactory);
        $peclFactory->shouldHaveType('DeSmart\Support\stubs\PeclUuidFactory');
        $peclFactory->shouldImplement('DeSmart\Support\stubs\UuidFactoryInterface');
    }
}