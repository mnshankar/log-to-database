<?php

namespace DBLog\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\Db\Adapter\AdapterAwareInterface;
/**
 * Description of DBLogFactory
 *
 * @author Administrator
 */
class DBLogFactory implements FactoryInterface{    
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator) {
        $dbAdapter = $serviceLocator->get('Zend\Db\Adapter\Adapter');
        $config = $serviceLocator->get('config');
        $tableName = $config['dblog']['tableName'];
        $columnMap = $config['dblog']['columnMap'];
        $logger = new CustomDBLogger();
        $writer = new \Zend\Log\Writer\Db($dbAdapter, $tableName, $columnMap);

        $logger->addWriter($writer);
        return $logger;
    }
   

}

?>
