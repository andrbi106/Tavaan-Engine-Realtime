<?php

declare(strict_types=1);

namespace Tavaan\Engine\Realtime;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Broadcast — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Realtime\Contracts\BroadcastInterface
 */
final class Broadcast implements Contracts\BroadcastInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function channel(/* ... */): mixed
    {
        // TODO: پیاده‌سازی channel مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function connection(/* ... */): mixed
    {
        // TODO: پیاده‌سازی connection مطابق مستندات (سند §3 API).
        return null;
    }
}