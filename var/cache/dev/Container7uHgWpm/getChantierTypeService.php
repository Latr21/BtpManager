<?php

namespace Container7uHgWpm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChantierTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ChantierType' shared autowired service.
     *
     * @return \App\Form\ChantierType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ChantierType.php';

        return $container->privates['App\\Form\\ChantierType'] = new \App\Form\ChantierType();
    }
}
