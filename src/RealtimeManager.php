<?php

declare(strict_types=1);

namespace Tavaan\Engine\Realtime;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * RealtimeManager — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Realtime\Contracts\RealtimeManagerInterface
 */
final class RealtimeManager implements Contracts\RealtimeManagerInterface
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
    public function broadcast(/* ... */): mixed
    {
        // TODO: پیاده‌سازی broadcast مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function presence(/* ... */): mixed
    {
        // TODO: پیاده‌سازی presence مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function publish(/* ... */): mixed
    {
        // TODO: پیاده‌سازی publish مطابق مستندات (سند §3 API).
        return null;
    }
}