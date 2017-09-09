<?php

namespace Injectable;

use Injectable\Exception\InjectableException;
use Psr\Container\ContainerInterface;

final class ContainerSingleton
{
    private static $container;

    public static function setContainer(ContainerInterface $container)
    {
        self::$container = $container;
    }

    public static function get($name)
    {
        if (!self::$container) {
            throw new InjectableException('Container is empty. Create him via Injectable\Factories');
        }
        return self::$container->get($name);
    }

    public static function has($name)
    {
        if (!self::$container) {
            throw new InjectableException('Container is empty. Create him via Injectable\Factories');
        }
        return self::$container->has($name);
    }

    final private function __construct()
    {
    }

    final private function __clone()
    {
    }

    final private function __wakeup()
    {
    }
}