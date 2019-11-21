<?php

namespace SoosyzeExtension\BlockExtended\Controller;

class BlockExtended extends \Soosyze\Controller
{
    public function __construct()
    {
        $this->pathServices = dirname(__DIR__) . '/Config/service.json';
        $this->pathViews    = dirname(__DIR__) . '/Views/';
    }
}
