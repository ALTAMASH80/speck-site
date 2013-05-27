<?php

return array(
	'service_manager' => array(
		'factories' => array(
			'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory'
		),
	),
	'navigation' => array(
		'default' => array(
			array(
				'label' => 'Home',
				'route' => 'home',
			),
			array(
				'label' => 'About',
				'route' => 'about',
			),
			array(
				'label' => 'Our Mission',
				'route' => 'our-mission',
			),
		),
	),
);