<?php

namespace ContainerEOxESWp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Lock_Default_Store_TTEhGTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.lock.default.store.TTEh_gT' shared service.
     *
     * @return \Symfony\Component\Lock\PersistingStoreInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'lock'.\DIRECTORY_SEPARATOR.'PersistingStoreInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'lock'.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'StoreFactory.php';

        return $container->privates['.lock.default.store.TTEh_gT'] = \Symfony\Component\Lock\Store\StoreFactory::createStore($container->getEnv('LOCK_DSN'));
    }
}
