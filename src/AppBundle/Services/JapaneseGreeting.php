<?php

namespace AppBundle\Services;

class JapaneseGreeting implements GreetingInterface
{
    public function sayHello($name = null)
    {
        return 'こんにちは' . ($name ? "、{$name}さん" : '') . '。';
    }
}
