<?php

namespace ContainerQTwoVeS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSupplier2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.dvS6U1..App\Entity\Supplier' shared service.
     *
     * @return \App\Entity\Supplier
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.dvS6U1.": it needs an instance of "App\\Entity\\Supplier" but this type has been excluded in "config/services.yaml".');
    }
}