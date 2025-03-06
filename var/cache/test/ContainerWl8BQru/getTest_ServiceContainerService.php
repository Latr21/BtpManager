<?php

namespace ContainerWl8BQru;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTest_ServiceContainerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'test.service_container' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Test\TestContainer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['test.service_container'] = new \Symfony\Bundle\FrameworkBundle\Test\TestContainer(($container->services['kernel'] ?? $container->get('kernel', 1)), 'test.private_services_locator', ['cache.default_clearer' => 'cache.app_clearer', 'debug.event_dispatcher' => 'debug.event_dispatcher.inner', 'debug.controller_resolver' => 'debug.controller_resolver.inner', 'debug.argument_resolver' => 'debug.argument_resolver.inner', 'router.default' => 'router', 'security.csrf.same_origin_token_manager' => 'security.csrf.same_origin_token_manager.inner', 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => 'parameter_bag', 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => 'parameter_bag', 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => 'debug.event_dispatcher.inner', 'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => 'debug.event_dispatcher.inner', 'Psr\\EventDispatcher\\EventDispatcherInterface' => 'debug.event_dispatcher.inner', 'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => 'http_kernel', 'Symfony\\Component\\HttpFoundation\\RequestStack' => 'request_stack', 'Symfony\\Component\\HttpFoundation\\UrlHelper' => 'url_helper', 'Symfony\\Component\\HttpKernel\\KernelInterface' => 'kernel', 'Symfony\\Component\\Filesystem\\Filesystem' => 'filesystem', 'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => 'file_locator', 'Symfony\\Component\\HttpFoundation\\UriSigner' => 'uri_signer', 'Symfony\\Component\\String\\Slugger\\SluggerInterface' => 'slugger', 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentUriGeneratorInterface' => 'fragment.uri_generator', 'error_renderer.html' => 'twig.error_renderer.html', 'error_renderer' => 'twig.error_renderer.html', 'Psr\\Container\\ContainerInterface $parameterBag' => 'parameter_bag', 'Psr\\Cache\\CacheItemPoolInterface' => 'cache.app', 'Symfony\\Contracts\\Cache\\CacheInterface' => 'cache.app', 'Symfony\\Contracts\\Cache\\TagAwareCacheInterface' => 'cache.app.taggable', 'Symfony\\Component\\Asset\\Packages' => 'assets.packages', 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\FileLinkFormatter' => 'debug.file_link_formatter', 'Symfony\\Component\\Stopwatch\\Stopwatch' => 'debug.stopwatch', 'Symfony\\Component\\Routing\\RouterInterface' => 'router', 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => 'router', 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => 'router', 'Symfony\\Component\\Routing\\RequestContextAwareInterface' => 'router', 'Symfony\\Component\\Routing\\RequestContext' => 'router.request_context', 'Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface' => 'property_accessor', 'Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface' => 'property_info', 'Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface' => 'property_info', 'Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface' => 'property_info', 'Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface' => 'property_info', 'Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface' => 'property_info', 'Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface' => 'property_info', 'Symfony\\Component\\PropertyInfo\\PropertyReadInfoExtractorInterface' => 'property_info.reflection_extractor', 'Symfony\\Component\\PropertyInfo\\PropertyWriteInfoExtractorInterface' => 'property_info.reflection_extractor', 'cache.default_doctrine_dbal_provider' => 'doctrine.dbal.default_connection', 'SessionHandlerInterface' => 'session.handler.native', 'session.storage.factory' => 'session.storage.factory.mock_file', 'session.handler' => 'session.handler.native', 'session_listener' => 'test.session.listener', 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface' => 'security.csrf.token_generator', 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface' => 'security.csrf.token_storage', 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface' => 'security.csrf.same_origin_token_manager.inner', 'Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface' => 'form.resolved_type_factory', 'Symfony\\Component\\Form\\FormRegistryInterface' => 'form.registry', 'Symfony\\Component\\Form\\FormFactoryInterface' => 'form.factory', 'form.property_accessor' => 'property_accessor', 'form.choice_list_factory' => 'form.choice_list_factory.cached', 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface' => 'validator', 'validator.mapping.class_metadata_factory' => 'validator', 'Doctrine\\DBAL\\Connection' => 'doctrine.dbal.default_connection', 'Doctrine\\Persistence\\ManagerRegistry' => 'doctrine', 'Doctrine\\Common\\Persistence\\ManagerRegistry' => 'doctrine', 'doctrine.dbal.event_manager' => 'doctrine.dbal.default_connection.event_manager', 'Doctrine\\DBAL\\Connection $defaultConnection' => 'doctrine.dbal.default_connection', 'Doctrine\\ORM\\EntityManagerInterface' => 'doctrine.orm.default_entity_manager', 'doctrine.orm.default_metadata_cache' => 'cache.doctrine.orm.default.metadata', 'doctrine.orm.default_result_cache' => 'cache.doctrine.orm.default.result', 'doctrine.orm.default_query_cache' => 'cache.doctrine.orm.default.query', 'Doctrine\\ORM\\EntityManagerInterface $defaultEntityManager' => 'doctrine.orm.default_entity_manager', 'doctrine.orm.default_entity_manager.event_manager' => 'doctrine.dbal.default_connection.event_manager', 'doctrine.migrations.metadata_storage' => 'doctrine.migrations.storage.table_storage', 'Twig\\Environment' => 'twig', 'twig.loader.filesystem' => 'twig.loader.native_filesystem', 'argument_resolver.controller_locator' => '.service_locator.fIWaNj2', 'doctrine.id_generator_locator' => '.service_locator.BxSdgVt', 'twig.loader' => 'twig.loader.native_filesystem', 'Psr\\Log\\LoggerInterface' => 'logger', 'controller_resolver' => 'debug.controller_resolver.inner', 'argument_resolver' => 'debug.argument_resolver.inner', 'security.csrf.token_manager' => 'security.csrf.same_origin_token_manager.inner', 'twig.error_renderer.html.inner' => 'error_handler.error_renderer.html', 'doctrine.orm.default_metadata_driver' => '.doctrine.orm.default_metadata_driver.inner', 'App\\Kernel' => 'kernel', 'database_connection' => 'doctrine.dbal.default_connection', 'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager']);
    }
}
