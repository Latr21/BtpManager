<?php

namespace Container2YjYIoD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChantierControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JGvoi82.App\Controller\ChantierController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JGvoi82.App\\Controller\\ChantierController::delete()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'chantier' => ['privates', '.errored..service_locator.JGvoi82.App\\Entity\\Chantier', NULL, 'Cannot autowire service ".service_locator.JGvoi82": it needs an instance of "App\\Entity\\Chantier" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'chantier' => 'App\\Entity\\Chantier',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\ChantierController::delete()', $container);
    }
}
