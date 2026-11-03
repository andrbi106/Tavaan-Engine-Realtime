<?php

declare(strict_types=1);

namespace Tavaan\Engine\Realtime;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Realtime\Contracts\RealtimeManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * RealtimeManagerServiceProvider — ثبت سرویس‌های موتور RealtimeManager.
 */
final class RealtimeManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(RealtimeManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new RealtimeManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Realtime\Console\Realtime_websocketCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            RealtimeManagerInterface::class,
        ];
    }
}