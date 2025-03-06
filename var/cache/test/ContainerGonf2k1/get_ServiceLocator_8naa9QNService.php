<?php

namespace ContainerGonf2k1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8naa9QNService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.8naa9QN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8naa9QN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ouvrierRepository' => ['privates', 'App\\Repository\\OuvrierRepository', 'getOuvrierRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'ouvrierRepository' => 'App\\Repository\\OuvrierRepository',
            'entityManager' => '?',
        ]);
    }
}
