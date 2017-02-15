<?php namespace Site\Admin;

use Backend;
use System\Classes\PluginBase;
use Event;

/**
 * CineTeatro Plugin Information File
 */
class Plugin extends PluginBase
{

    public function boot()
    {
        $langPath = base_path() . '/modules/cms/lang';
        $this->app['translator']->addNamespace('cms', $langPath );
    }

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'CineTeatro',
            'description' => 'No description provided yet...',
            'author'      => 'Afipe',
            'icon'        => 'icon-leaf'
        ];
    }


    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
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
            'media' => [
                'label'       => 'cms::lang.media.menu_label',
                'icon'        => 'icon-folder',
                'iconSvg'     => 'modules/cms/assets/images/media-icon.svg',
                'url'         => Backend::url('cms/media'),
                'permissions' => ['media.*'],
                'order'       => 20
            ],
        ];
    }

}
