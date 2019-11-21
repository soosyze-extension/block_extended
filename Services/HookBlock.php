<?php

namespace SoosyzeExtension\BlockExtended\Services;

class HookBlock
{
    private $template;

    public function __construct($template)
    {
        $this->template  = $template;
        $this->pathViews = dirname(__DIR__) . '/Views/';
    }

    public function blockCreate(array &$blocks)
    {
        $blocks[ 'google_map' ]  = [
            'title' => t('Google Map'),
            'tpl'   => 'google_map.php',
            'path'  => $this->pathViews
        ];
        $blocks[ 'youtube' ]     = [
            'title' => t('Youtube'),
            'tpl'   => 'youtube.php',
            'path'  => $this->pathViews
        ];
        $blocks[ 'dailymotion' ] = [
            'title' => t('Dailymotion'),
            'tpl'   => 'dailymotion.php',
            'path'  => $this->pathViews
        ];
        $blocks[ 'twitch' ]      = [
            'title' => t('Twitch'),
            'tpl'   => 'twitch.php',
            'path'  => $this->pathViews
        ];
        $blocks[ 'vimeo' ]       = [
            'title' => t('Vimeo'),
            'tpl'   => 'vimeo.php',
            'path'  => $this->pathViews
        ];
    }
}
