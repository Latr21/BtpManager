<?php

namespace ContainerGonf2k1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOuvrierControllereditService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.8naa9QN.App\Controller\OuvrierController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8naa9QN.App\\Controller\\OuvrierController::edit()'] = ($container->privates['.service_locator.8naa9QN'] ?? $container->load('get_ServiceLocator_8naa9QNService'))->withContext('App\\Controller\\OuvrierController::edit()', $container);
    }
}
