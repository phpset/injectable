<?php

require_once __DIR__ . '/vendor/autoload.php';

$config = [
    'some' => new ArrayIterator([]),
];
$container = \Injectable\Factories\LeagueFactory::fromConfig($config);
\Injectable\ContainerSingleton::setContainer($container);


class Simple
{
    use \Injectable\BaseInjectable;
}

$simple = new Simple();
$result = $simple->some->count();

if ($result === 0) {
    echo "All OK\n";
}
