<?php

namespace Container04wlIJ2;

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
        return $container->privates['.service_locator.JGvoi82.App\\Controller\\ChantierController::delete()'] = ($container->privates['.service_locator.JGvoi82'] ?? $container->load('get_ServiceLocator_JGvoi82Service'))->withContext('App\\Controller\\ChantierController::delete()', $container);
    }
}
