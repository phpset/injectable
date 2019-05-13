<?php

require_once __DIR__ . '/vendor/autoload.php';

$config = [
    'some' => new ArrayIterator([]),

    'foo' => function ($param1, $param2) {
        if ($param1 == 11 && $param2 == 12) {
            return true;
        }
        return false;
    }
];
$container = \Injectable\Factories\LeagueFactory::fromConfig($config, [11, 12]);
\Injectable\ContainerSingleton::setContainer($container);


class Simple
{
    use \Injectable\BaseInjectable;
}

$simple = new Simple();
$result = $simple->some->count();

if ($result === 0) {
    echo "1. some - ok\n";
}

$result = $simple->foo;
if ($result === true) {
    echo "2. params - ok\n";
}