<?php

namespace ContainerMklr0vD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEquipeControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CbpT37N.App\Controller\EquipeController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CbpT37N.App\\Controller\\EquipeController::edit()'] = ($container->privates['.service_locator.CbpT37N'] ?? $container->load('get_ServiceLocator_CbpT37NService'))->withContext('App\\Controller\\EquipeController::edit()', $container);
    }
}
