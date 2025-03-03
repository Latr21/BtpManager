<?php

namespace Container04wlIJ2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEquipeControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1Ipgx3N.App\Controller\EquipeController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1Ipgx3N.App\\Controller\\EquipeController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'equipeRepository' => ['privates', 'App\\Repository\\EquipeRepository', 'getEquipeRepositoryService', true],
        ], [
            'equipeRepository' => 'App\\Repository\\EquipeRepository',
        ]))->withContext('App\\Controller\\EquipeController::index()', $container);
    }
}
