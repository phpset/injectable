<?php

namespace Injectable\Factories;

class LeagueFactory
{
    public static function fromConfig(array $config)
    {
        $container = new \League\Container\Container();
        foreach ($config as $name => $concrete) {
            $shared = true;

            if (is_array($concrete)) {
                $shared = isset($value[1]) ?: true;
                $value = $value[0];
            }

            $container->add($name, $concrete, $shared);
        }
        return $container;
    }
}