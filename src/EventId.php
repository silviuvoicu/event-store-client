<?php

/**
 * This file is part of `prooph/event-store-client`.
 * (c) 2018-2018 prooph software GmbH <contact@prooph.de>
 * (c) 2018-2018 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\EventStoreClient;

use Prooph\EventStoreClient\Util\UuidGenerator;
use Ramsey\Uuid\UuidInterface;

class EventId
{
    /** @var UuidInterface */
    private $uuid;

    public static function generate(): EventId
    {
        return new self(UuidGenerator::generate());
    }

    public static function fromString(string $eventId): EventId
    {
        return new self(UuidGenerator::fromString($eventId));
    }

    public static function fromBinary(string $bytes): EventId
    {
        return new self(UuidGenerator::fromBytes($bytes));
    }

    private function __construct(UuidInterface $eventId)
    {
        $this->uuid = $eventId;
    }

    public function toString(): string
    {
        return $this->uuid->toString();
    }

    public function toBinary(): string
    {
        return $this->uuid->getBytes();
    }

    public function __toString(): string
    {
        return $this->uuid->toString();
    }

    public function equals(EventId $other): bool
    {
        return $this->uuid->equals($other->uuid);
    }
}
