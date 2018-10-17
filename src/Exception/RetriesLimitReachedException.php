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

namespace Prooph\EventStoreClient\Exception;

class RetriesLimitReachedException extends RuntimeException
{
    public static function with(int $retries): RetriesLimitReachedException
    {
        return new self(
            \sprintf(
                'Operation reached retries limit: \'%s\'',
                $retries
            )
        );
    }
}
