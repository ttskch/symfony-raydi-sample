<?php

namespace AppBundle\Services;

interface GreetingInterface
{
    public function sayHello($name = null);
}
