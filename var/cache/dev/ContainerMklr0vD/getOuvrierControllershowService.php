<?php

namespace ContainerMklr0vD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOuvrierControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.baLGXpn.App\Controller\OuvrierController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.baLGXpn.App\\Controller\\OuvrierController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ouvrier' => ['privates', '.errored..service_locator.baLGXpn.App\\Entity\\Ouvrier', NULL, 'Cannot autowire service ".service_locator.baLGXpn": it needs an instance of "App\\Entity\\Ouvrier" but this type has been excluded in "config/services.yaml".'],
        ], [
            'ouvrier' => 'App\\Entity\\Ouvrier',
        ]))->withContext('App\\Controller\\OuvrierController::show()', $container);
    }
}
