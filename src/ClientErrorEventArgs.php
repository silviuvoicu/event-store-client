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

use Prooph\EventStore\AsyncEventStoreConnection;
use Throwable;

class ClientErrorEventArgs implements EventArgs
{
    /** @var AsyncEventStoreConnection */
    private $connection;
    /** @var Throwable */
    private $exception;

    public function __construct(AsyncEventStoreConnection $connection, Throwable $exception)
    {
        $this->connection = $connection;
        $this->exception = $exception;
    }

    public function connection(): AsyncEventStoreConnection
    {
        return $this->connection;
    }

    public function exception(): Throwable
    {
        return $this->exception;
    }
}
