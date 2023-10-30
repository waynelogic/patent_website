<?php namespace Albus\StaticPageExtender;

use Backend;
use System\Classes\PluginBase;

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
            'name' => 'StaticPageExtender',
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
        return [
            'Albus\StaticPageExtender\Components\Pages' => 'Pages',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'albus.staticpageextender.some_permission' => [
                'tab' => 'StaticPageExtender',
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
            'staticpageextender' => [
                'label' => 'StaticPageExtender',
                'url' => Backend::url('albus/staticpageextender/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['albus.staticpageextender.*'],
                'order' => 500,
            ],
        ];
    }
}
