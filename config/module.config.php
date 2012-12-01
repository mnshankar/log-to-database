<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
return array(
    'dblog' => array(
        'tableName' => 'log_table',
        'columnMap' => array(
            'timestamp' => 'timestamp',
            'priority' => 'priority',
            'priorityName' => 'priorityName',
            'message' => 'message',
            'extra' => array(               
                'url' => 'url',
                'ipaddress' => 'ipaddress',
                'username'=>'username'
            ),
        )       
    ),
    'controllers' => array(
        'invokables' => array(
            'DBLog\Controller\DBLog' => 'DBLog\Controller\DBLogController',            
        ),
    ),    
    'router' => array(
        'routes' => array(
            'dblog' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/dblog',
                    'constraints' => array(
                        'action' => 'index',                        
                    ),
                    'defaults' => array(
                        'controller' => 'DBLog\Controller\DBLog',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);
?>
