<?php

namespace App\Twig;

use Doctrine\Common\Persistence\ManagerRegistry;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;


class MiFiltroExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('infoUsuario', [$this, 'infoUsuario']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('infoUsuario', [$this, 'infoUsuario']),
        ];
    }

    public function infoUsuario($idUser)
    {

        return $usuario;
    }


}
