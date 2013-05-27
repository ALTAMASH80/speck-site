<?php
return array(
	'view_manager' => array(
		'template_path_stack' => array(
			'speck-docs' => __DIR__ . '/../view',
		),
	),
	'controllers' => array(
		'invokables' => array(
			'SpeckDocs\Controller\Docs' => 'SpeckDocs\Controller\DocsController'
		),
	),
	'service_manager' => array(
		'aliases' => array(
			'speckdocs_zend_db_adapter' => 'Zend\Db\Adapter\Adapter',
		),
	),
	'router' => array(
        'routes' => array(
            'docs' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/docs',
                    'defaults' => array(
                        '__NAMESPACE__' => 'SpeckDocs\Controller',
                        'controller'    => 'Docs',
                        'action'        => 'index',
            			'doctitle' 	 => 'intro-to-speckcommerce',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:doctitle]',
                            'constraints' => array(
                				'controller' => 'Docs',
                                'doctitle' 	 => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => 'index',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /docs/:controller/:action
            
        ),
    ),
);
