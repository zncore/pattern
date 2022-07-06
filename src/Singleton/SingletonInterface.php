<?php

namespace ZnCore\Pattern\Singleton;

interface SingletonInterface
{

    public static function getInstance(): self;

}