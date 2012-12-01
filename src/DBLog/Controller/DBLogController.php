<?php
namespace DBLog\Controller;
use Zend\Mvc\Controller\AbstractActionController;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Test controller to demonstrate dblogger functionality
 *
 * @author Administrator
 */
class DBLogController extends AbstractActionController    
{    
    public function indexAction() {
        $logger = $this->getServiceLocator()->get('logger');
        $logger->addExtra(array('username'=>'test'));
        $logger->Info('Log this please!');
        return '';
    }
}

