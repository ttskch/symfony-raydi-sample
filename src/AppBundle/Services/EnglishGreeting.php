<?php

namespace AppBundle\Services;

class EnglishGreeting implements GreetingInterface
{
    public function sayHello($name = null)
    {
        return 'Hello' . ($name ? ", {$name}" : '') . '.';
    }
}
