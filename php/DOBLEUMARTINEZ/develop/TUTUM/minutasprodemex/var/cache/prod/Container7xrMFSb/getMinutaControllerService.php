<?php

namespace Container7xrMFSb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMinutaControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\MinutaController' shared autowired service.
     *
     * @return \App\Controller\MinutaController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\MinutaController'] = $instance = new \App\Controller\MinutaController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\MinutaController', $container));

        return $instance;
    }
}
