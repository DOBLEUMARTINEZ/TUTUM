<?php

namespace Container7xrMFSb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSeccionMinutaTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\form\SeccionMinutaType' shared autowired service.
     *
     * @return \App\form\SeccionMinutaType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\form\\SeccionMinutaType'] = new \App\form\SeccionMinutaType();
    }
}
