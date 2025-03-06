<?php

namespace ContainerGonf2k1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChantierControllerindexService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.zmu.76o.App\Controller\ChantierController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zmu.76o.App\\Controller\\ChantierController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'chantierRepository' => ['privates', 'App\\Repository\\ChantierRepository', 'getChantierRepositoryService', true],
        ], [
            'chantierRepository' => 'App\\Repository\\ChantierRepository',
        ]))->withContext('App\\Controller\\ChantierController::index()', $container);
    }
}
