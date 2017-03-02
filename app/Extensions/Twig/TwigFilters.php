<?php
/**
 * Created by PhpStorm.
 * User: Lyozsi
 * Date: 2017. 03. 02.
 * Time: 21:27
 */

namespace App\Extensions\Twig;


class TwigFilters extends \Twig_Extension
{
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('spaces', array($this, 'generateSpaces')),
        ];
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('generateSpaces', [$this, 'generateSpaces']),
        );
    }

    public function generateSpaces($remove = "", $maxLength = 1)
    {
        return str_repeat(" ", $maxLength - strlen($remove));
    }
}