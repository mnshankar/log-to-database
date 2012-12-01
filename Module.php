<?php

namespace DBLog;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Module {

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig() {
        return array(
            'factories' => array(
                'logger' => 'DBLog\Service\DBLogFactory',
                'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
            ),
        );
    }

   public function onBootstrap($e) {
        $e->getApplication()
                ->getServiceManager()
                ->get('logger')
                ->addExtra(array(                    
                    'url' => $e->getParam('request')->getRequestUri(),
                    'ipaddress' => $e->getParam('request')->getServer('REMOTE_ADDR'),
                    )
        );
    }

}

?>
