<?php

namespace Navigation;

use Zend\Mvc\Application;

class Module {

	public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}

