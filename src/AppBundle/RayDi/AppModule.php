<?php

namespace AppBundle\RayDi;

use AppBundle\Services\EnglishGreeting;
use AppBundle\Services\GreetingInterface;
use AppBundle\Services\JapaneseGreeting;
use Ray\Di\AbstractModule;

class AppModule extends AbstractModule
{
    public function configure()
    {
        $this->bind(GreetingInterface::class)->to(EnglishGreeting::class);
//        $this->bind(GreetingInterface::class)->to(JapaneseGreeting::class);
    }
}
