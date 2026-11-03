<?php

declare(strict_types=1);

namespace Tavaan\Engine\Realtime\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * realtime:websocket command.
 */
final class RealtimeWebsocketCommand implements CommandInterface
{
    public function name(): string
    {
        return 'realtime:websocket';
    }

    public function description(): string
    {
        return 'Run realtime:websocket (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
