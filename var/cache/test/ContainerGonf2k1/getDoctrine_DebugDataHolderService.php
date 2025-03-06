<?php

namespace ContainerGonf2k1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_DebugDataHolderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.debug_data_holder' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Middleware/Debug/DebugDataHolder.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Middleware/BacktraceDebugDataHolder.php';

        return $container->privates['doctrine.debug_data_holder'] = new \Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder(['default']);
    }
}
