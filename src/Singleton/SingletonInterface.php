<?php

namespace ZnCore\Pattern\Singleton;

interface SingletonInterface
{

    /**
     * @return static
     */
    public static function getInstance(): self;
}