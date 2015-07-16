<?php namespace DeSmart\Support;

use Ramsey\Uuid\FeatureSet;
use Ramsey\Uuid\PeclUuidFactory;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidFactory;

class GenerateUuid
{
    /**
     * @return string
     */
    public function generateOrderedUuid1()
    {
        $uuid = $this->generateUuid1();
        $uuid = substr($uuid, 12, 4) . substr($uuid, 8, 4) . substr($uuid, 0, 8) . substr($uuid, 16);

        return $uuid;
    }

    /**
     * @return string
     */
    public function generateUuid1()
    {
        /**
         * We're forcing UUID generator not to use MAC address
         * and generate random string according to RFC 4122, Section 4.5.
         */
        $factory = new PeclUuidFactory(new UuidFactory(new FeatureSet(false, false, false, true)));
        Uuid::setFactory($factory);

        $uuid = (string)Uuid::uuid1();
        $uuid = str_replace('-', '', $uuid);

        return $uuid;
    }
}