<?php

namespace ZnCore\Pattern\Singleton;

/**
 *
 */
trait SingletonTrait
{

    /** @var static */
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = self::createInstance();
        }
        return self::$instance;
    }

    protected static function getConstructorParameters(): array
    {
        return [];
    }

    private static function createInstance(string $className = null): self
    {
        $className = $className ?: static::class;
        $constructorParameters = static::getConstructorParameters();
        return new $className(...$constructorParameters);
    }
}
