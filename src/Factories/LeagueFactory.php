<?php

namespace Injectable\Factories;

class LeagueFactory
{
    public static function fromConfig(array $config, $arguments = null)
    {
        $container = new \League\Container\Container();
        foreach ($config as $name => $concrete) {
            $shared = true;

            if (is_array($concrete)) {
                $shared = isset($value[1]) ?: true;
                $value = $value[0];
            }

            $res = $container->add($name, $concrete, $shared);
            if ($res && $arguments) {
                $res->withArguments($arguments);
            }
        }
        return $container;
    }
}