<?php

namespace SoosyzeExtension\BlockExtended\Hook;

class Block implements \SoosyzeCore\Block\BlockInterface
{
    public function __construct()
    {
        $this->pathViews = dirname(__DIR__) . '/Views/';
    }

    public function hookBlockCreateFormData(array &$blocks)
    {
        $blocks[ 'google_map' ]  = [
            'title' => t('Google Map'),
            'tpl'   => 'components/block/blockextended-google_map.php',
            'path'  => $this->pathViews
        ];
        $blocks[ 'youtube' ]     = [
            'title' => t('Youtube'),
            'tpl'   => 'components/block/blockextended-youtube.php',
            'path'  => $this->pathViews
        ];
        $blocks[ 'dailymotion' ] = [
            'title' => t('Dailymotion'),
            'tpl'   => 'components/block/blockextended-dailymotion.php',
            'path'  => $this->pathViews
        ];
        $blocks[ 'twitch' ]      = [
            'title' => t('Twitch'),
            'tpl'   => 'components/block/blockextended-twitch.php',
            'path'  => $this->pathViews
        ];
        $blocks[ 'vimeo' ]       = [
            'title' => t('Vimeo'),
            'tpl'   => 'components/block/blockextended-vimeo.php',
            'path'  => $this->pathViews
        ];
    }
}
