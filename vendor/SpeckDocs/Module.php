<?php

namespace SpeckDocs;

//use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module //implements 
			//	AutoloaderProviderInterface,
			//	ServiceProviderInterface
{
	public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'speckdocs_docs_mapper' => function ($sm) {
        			$mapper = new \SpeckDocs\Mapper\Docs;
        			$entity = new \SpeckDocs\Entity\Document;
                    $mapper->setDbAdapter($sm->get('speckdocs_zend_db_adapter'));
                    $mapper->setEntityPrototype($entity);
                    $mapper->setTableName('documents');
                    return $mapper;
                },
            ),
        );
    }
    
	public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
    
	public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
