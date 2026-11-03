<?php

declare(strict_types=1);

namespace Tavaan\Engine\Realtime\Contracts;

/**
 * قرارداد Broadcast.
 *
 * @see \Tavaan\Engine\Realtime\Broadcast
 * @api 1.0
 */
interface BroadcastInterface
{
    /**
     * متد channel.
     *
     * @return mixed
     */
    public function channel(/* ... */): mixed;

    /**
     * متد connection.
     *
     * @return mixed
     */
    public function connection(/* ... */): mixed;
}