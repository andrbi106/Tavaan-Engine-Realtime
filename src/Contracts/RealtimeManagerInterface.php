<?php

declare(strict_types=1);

namespace Tavaan\Engine\Realtime\Contracts;

/**
 * قرارداد RealtimeManager.
 *
 * @see \Tavaan\Engine\Realtime\RealtimeManager
 * @api 1.0
 */
interface RealtimeManagerInterface
{
    /**
     * متد broadcast.
     *
     * @return mixed
     */
    public function broadcast(/* ... */): mixed;

    /**
     * متد presence.
     *
     * @return mixed
     */
    public function presence(/* ... */): mixed;

    /**
     * متد publish.
     *
     * @return mixed
     */
    public function publish(/* ... */): mixed;
}