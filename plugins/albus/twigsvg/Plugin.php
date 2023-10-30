<?php namespace Albus\TwigSvg;

use Backend;
use System\Classes\PluginBase;
use BladeUI\Icons\Factory;
use BladeUI\Icons\Svg;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'TwigSvg',
            'description' => 'No description provided yet...',
            'author' => 'Albus',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Albus\TwigSvg\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'albus.twigsvg.some_permission' => [
                'tab' => 'TwigSvg',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'twigsvg' => [
                'label' => 'TwigSvg',
                'url' => Backend::url('albus/twigsvg/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['albus.twigsvg.*'],
                'order' => 500,
            ],
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'svg' => [$this, 'getSvg']
            ]
        ];
    }

    public function getSvg(string $name, $class = '', array $attributes = [])
    {
        $svg = app(Factory::class)->svg($name, $class, $attributes);
        return $svg->toHtml();
    }
}
