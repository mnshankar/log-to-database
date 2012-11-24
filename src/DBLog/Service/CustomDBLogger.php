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
        $extra = $this->extra;
        parent::log($priority, $message, $extra);
    }

    public function setExtra($extra) {
        $this->extra = $extra;
    }

}

?>
