<?php

namespace Injectable;

use Psr\Container\ContainerInterface;

class ContainerSingleton
{
    private static $container;

    public static function setContainer(ContainerInterface $container)
    {
        self::$container = $container;
    }

    public static function get($name)
    {
        return self::$container->get($name);
    }

    public static function has($name)
    {
        return self::$container->has($name);
    }
}