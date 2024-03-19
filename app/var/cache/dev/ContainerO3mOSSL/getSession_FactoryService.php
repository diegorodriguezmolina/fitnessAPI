<?php

namespace ContainerO3mOSSL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_FactoryService extends FitnessApi_App_AppKernelDevDebugContainer
{
    /**
     * Gets the private 'session.factory' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\SessionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-foundation/Session/SessionFactoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-foundation/Session/SessionFactory.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-foundation/Session/Storage/SessionStorageFactoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-foundation/Session/Storage/NativeSessionStorageFactory.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';

        $a = ($container->privates['session_listener'] ?? $container->getSessionListenerService());

        if (isset($container->privates['session.factory'])) {
            return $container->privates['session.factory'];
        }

        return $container->privates['session.factory'] = new \Symfony\Component\HttpFoundation\Session\SessionFactory(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory($container->parameters['session.storage.options'], new \Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler(new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($container->targetDir.''.'/sessions'))), new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0), false), [0 => $a, 1 => 'onSessionUsage']);
    }
}
