<?php

namespace Container7xrMFSb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuscarTemaTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\form\BuscarTemaType' shared autowired service.
     *
     * @return \App\form\BuscarTemaType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\form\\BuscarTemaType'] = new \App\form\BuscarTemaType();
    }
}
