<?php

namespace ContainerBmnvhi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TgqcLbwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TgqcLbw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TgqcLbw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'affectation' => ['privates', '.errored..service_locator.TgqcLbw.App\\Entity\\Affectation', NULL, 'Cannot autowire service ".service_locator.TgqcLbw": it needs an instance of "App\\Entity\\Affectation" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'affectation' => 'App\\Entity\\Affectation',
            'entityManager' => '?',
        ]);
    }
}
