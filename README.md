# Injectable
Injectable magic trait for Service Locator access

```php
// Create config: key -> value/callable/any
$config = [
    'service1' => new ArrayIterator([]),
    'cache' => new Memcache(),
];

// Init container via Injectable
$container = \Injectable\Factories\LeagueFactory::fromConfig($config);
\Injectable\ContainerSingleton::setContainer($container);

// Add to your class trait BaseInjectable
class Simple
{
    use \Injectable\BaseInjectable;
    
    public function someLogic () {
        // Access to services via magic
        // $this->cache -> Memcache instance
        $this->cache->set('key', 'value');
    }
}
```

## Keywords
Container is empty. Create him via Injectable\Factories
