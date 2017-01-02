<?php namespace Errogaht\Kint;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Kint debugger',
            'description' => 'Provides twig function d()',
            'author'      => 'Alex Teterin',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'd' => function($v) { d($v); }
            ]
        ];
    }
}
