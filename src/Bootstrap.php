<?php

declare(strict_types=1);

namespace PHPMate\Dashboard;

use Nette\Bootstrap\Configurator;


class Bootstrap
{
    public static function boot(): Configurator
    {
        $configurator = new Configurator;

        $configurator->enableTracy(__DIR__ . '/../var/log');

        if (isset($_ENV['APP_DEBUG']) && (bool) $_ENV['APP_DEBUG'] === true) {
            $configurator->setDebugMode(true);
        }

        $configurator->setTimeZone('Europe/Prague');
        $configurator->setTempDirectory(__DIR__ . '/../var/cache');

        $configurator->addConfig(__DIR__ . '/../config/common.neon');

        return $configurator;
    }
}
