<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'PhlySimplePage\Controller\Page' => 'PhlySimplePage\PageController',
        ),
        'factories' => array(
            'PhlySimplePage\Controller\Cache' => 'PhlySimplePage\CacheControllerService',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'PhlySimplePage\PageCacheListener' => 'PhlySimplePage\PageCacheListenerService',
        ),
    ),
    'console' => array('router' => array('routes' => array(
        'phly-simple-page-clearall' => array('options' => array(
            'route' => 'phlysimplepage cache clear all',
            'defaults' => array(
                'controller' => 'PhlySimplePage\Controller\Cache',
                'action'     => 'clearAll',
            ),
        )),
        'phly-simple-page-clearone' => array('options' => array(
            'route' => 'phlysimplepage cache clear --page=',
            'defaults' => array(
                'controller' => 'PhlySimplePage\Controller\Cache',
                'action'     => 'clearOne',
            ),
        )),
    ))),
    'router' =>array(
    	'routes' => array(
    		'about' => array(
    			'type' => 'Literal',
    			'options' => array(
    				'route' => '/about',
    				'defaults' => array(
    					'controller' => 'PhlySimplePage\Controller\Page',
    					'template' => 'application/pages/about'
    				),
    			),
    		),
    		'our-mission' => array(
    			'type' => 'Literal',
    			'options' => array(
    				'route' => '/our-mission',
    				'defaults' => array(
    					'controller' => 'PhlySimplePage\Controller\Page',
    					'template' => 'application/pages/ourmission'
    				),
    			),
    		),
    	),
    ),
);
