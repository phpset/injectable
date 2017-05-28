<?php

namespace Injectable;

trait Injectable
{
    public function __get($name)
    {
        if (!ContainerSingleton::has($name)) {
            throw new \Exception("Element {$name} not found in Container");
        }

        return ContainerSingleton::get($name);
    }
}