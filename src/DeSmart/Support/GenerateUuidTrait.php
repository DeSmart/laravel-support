<?php namespace DeSmart\Support;

use Ramsey\Uuid\FeatureSet;
use Ramsey\Uuid\PeclUuidFactory;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidFactory;

trait GenerateUuidTrait
{
    /**
     * @param bool $useHardwareAddress
     * @param bool $withDashes
     * @return string
     */
    public function generateOrderedUuid1($useHardwareAddress = false, $withDashes = false)
    {
        $uuid = $this->generateUuid1($useHardwareAddress, $withDashes);
        $uuid = substr($uuid, 12, 4) . substr($uuid, 8, 4) . substr($uuid, 0, 8) . substr($uuid, 16);

        return $uuid;
    }

    /**
     * @param bool $useHardwareAddress
     * @param bool $withDashes
     * @return string
     */
    public function generateUuid1($useHardwareAddress = false, $withDashes = false)
    {
        /**
         * If $useHardwareAddress equals false, we're forcing UUID generator not to use MAC address
         * and generate random string according to RFC 4122, Section 4.5.
         *
         * If $useHardwareAddress equals true, UUID generator will try to use MAC address and if MAC address cannot be
         * retrieved, then generate random string according to RFC 4122, Section 4.5.
         */
        if (false === $useHardwareAddress) {
            $factory = new PeclUuidFactory(new UuidFactory(new FeatureSet(false, false, false, true)));
            Uuid::setFactory($factory);
        }

        $uuid = (string)Uuid::uuid1();

        if (false === $withDashes) {
            $uuid = str_replace('-', '', $uuid);
        }

        return $uuid;
    }
}