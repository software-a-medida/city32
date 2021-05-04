<?php

defined('_EXEC') or die;

class Urls_registered_vkye
{
    static public $home_page_default = '/';

    static public function urls()
    {
        return [
            '/' => [
                'controller' => 'Index',
                'method' => 'index'
            ],
            '/shop' => [
                'controller' => 'Index',
                'method' => 'shop'
            ],
            '/care' => [
                'controller' => 'Index',
                'method' => 'care'
            ],
            '/stay' => [
                'controller' => 'Index',
                'method' => 'stay'
            ],
            '/entrertain' => [
                'controller' => 'Index',
                'method' => 'entrertain'
            ],
            '/taste' => [
                'controller' => 'Index',
                'method' => 'taste'
            ],
            '/work' => [
                'controller' => 'Index',
                'method' => 'work'
            ],
            '/events' => [
                'controller' => 'Index',
                'method' => 'events'
            ],
            '/contact' => [
                'controller' => 'Index',
                'method' => 'contact'
            ],
            '/map' => [
                'controller' => 'Index',
                'method' => 'map'
            ],
            '/privacy-notice' => [
                'controller' => 'Index',
                'method' => 'privacy_notice'
            ]
        ];
    }
}
