<?php

namespace ContainerLemHRcN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_DoctrineMigrations_SyncMetadataCommand_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.doctrine_migrations.sync_metadata_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.doctrine_migrations.sync_metadata_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('doctrine:migrations:sync-metadata-storage', [], 'Ensures that the metadata storage is at the latest version.', false, #[\Closure(name: 'doctrine_migrations.sync_metadata_command', class: 'Doctrine\\Migrations\\Tools\\Console\\Command\\SyncMetadataCommand')] fn (): \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand => ($container->privates['doctrine_migrations.sync_metadata_command'] ?? $container->load('getDoctrineMigrations_SyncMetadataCommandService')));
    }
}
