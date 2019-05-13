<?php

namespace Injectable\Factories;

use Psr\Container\ContainerInterface;

class LeagueFactory
{
    public static function fromConfig(array $config, $arguments = null): ContainerInterface
    {
        $container = new \League\Container\Container();
        foreach ($config as $name => $concrete) {
            $res = $container->add($name, $concrete, true);
            if ($res && $arguments) {
                $res->addArguments($arguments);
            }
        }
        return $container;
    }
}