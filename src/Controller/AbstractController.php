<?php

namespace Controller;

use Twig_Loader_Filesystem;
use Twig_Environment;

abstract class AbstractController
{

    protected $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(APP_VIEW_PATH);
        $this->twig = new Twig_Environment($loader, ['cache' => false, 'debug' => APP_DEV]);
        $this->twig->addExtension(new \Twig_Extension_Debug());
    }
}