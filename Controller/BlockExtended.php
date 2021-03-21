<?php

namespace SoosyzeExtension\BlockExtended\Controller;

class BlockExtended extends \Soosyze\Controller
{
    public function __construct()
    {
        $this->pathServices = dirname(__DIR__) . '/Config/services.php';
        $this->pathViews    = dirname(__DIR__) . '/Views/';
    }
}
