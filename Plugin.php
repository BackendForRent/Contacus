<?php namespace Goosy\Contacus;

use Backend;
use System\Classes\PluginBase;

/**
 * Contacus Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Contacus',
            'description' => 'No description provided yet...',
            'author'      => 'Goosy',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Goosy\Contacus\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'goosy.contacus.some_permission' => [
                'tab' => 'Contacus',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'contacus' => [
                'label'       => 'Contact us',
                'url'         => Backend::url('goosy/contacus/messages'),
                'icon'        => 'icon-envelope',
                'permissions' => ['goosy.contacus.*'],
                'order'       => 500,
            ],
        ];
    }
}
