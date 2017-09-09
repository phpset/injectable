# Injectable
Injectable magic trait for Service Locator access

```php
// Create config: key -> value/callable/any
$config = [
    'some' => new ArrayIterator([]),
];

// Set up Container
$container = \Injectable\Factories\LeagueFactory::fromConfig($config);
\Injectable\ContainerSingleton::setContainer($container);

// Use in yours classes via magic
class Simple
{
    use \Injectable\BaseInjectable;
}
$simple = new Simple();
$simple->some->count();
```
