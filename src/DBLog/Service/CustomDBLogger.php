<?php

namespace DBLog\Service;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomDBLogger
 *
 * @author Administrator
 */
class CustomDBLogger extends \Zend\Log\Logger {

    private $extra;

    public function __construct($extra=null) {
        $this->extra = $extra;
        parent::__construct();
    }

    public function log($priority, $message, $extra = array()) {        
        parent::log($priority, $message, $this->getExtra());
    }
    public function getExtra()
    {
        return $this->extra;
    }

    public function addExtra($extra) {
        if (count($this->getExtra())){
            $this->extra = array_merge($this->getExtra(), $extra);
        }        
        else{
            $this->extra=$extra;
        }
            
    }

}

?>
