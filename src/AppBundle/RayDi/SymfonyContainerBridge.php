<?php

namespace AppBundle\RayDi;

use Ray\Di\InjectorInterface;
use Symfony\Component\DependencyInjection\Container as SymfonyContainer;

class SymfonyContainerBridge extends SymfonyContainer
{
    /**
     * @var InjectorInterface
     */
    private $injector;

    /**
     * {@inheritdoc}
     */
    public function has($id)
    {
        if (parent::has($id)) {
            return true;
        }

        return (boolean)$this->injector->getInstance($id);
    }

    /**
     * {@inheritdoc}
     */
    public function get($id, $invalidBehavior = self::EXCEPTION_ON_INVALID_REFERENCE)
    {
        if (parent::has($id)) {
            return parent::get($id, $invalidBehavior);
        }

        return $this->injector->getInstance($id);
    }

    public function setInjector(InjectorInterface $injector)
    {
        $this->injector = $injector;
    }
}
