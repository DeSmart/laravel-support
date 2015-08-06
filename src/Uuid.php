<?php namespace DeSmart\Support;

use Ramsey\Uuid\FeatureSet;
use Ramsey\Uuid\UuidFactory;
use Ramsey\Uuid\UuidFactoryInterface;

class Uuid
{
    /**
     * @var \Ramsey\Uuid\UuidFactoryInterface
     */
    protected $factory;

    public function __construct(UuidFactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @return string
     */
    public function generateOrderedUuid1()
    {
        $uuid = str_replace('-', '', (string) $this->factory->uuid1());
        $uuid = substr($uuid, 12, 4) . substr($uuid, 8, 4) . substr($uuid, 0, 8) . substr($uuid, 16);

        return $uuid;
    }

    /**
     * @return string
     */
    public static function generateUuid()
    {
        $generator = new static(new UuidFactory(new FeatureSet(false, false, false, true)));

        return $generator->generateOrderedUuid1();
    }
}