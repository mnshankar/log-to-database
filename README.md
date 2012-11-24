log-to-database
===============

Log to a MySql database in Zend Framework 2

While database logging in ZF2 maintains much the same functionality as with ZF1, there is a difference in the way "custom" database columns are handled by ZF2(using the 'extra' array as opposed to the setEventItem() method) - This module demonstrates how this can be done.

Installation and Use:
---------------------
Run the logger.SQL script to create a table with the required columns. The 'extra' columns in this module are "url" and "ipaddress".. Of course you can add columns depending on your requirement - Note that these fields are injected in the onBootstrap event in Module.php.

Drop DBLog into your module or vendor folder, add database adapter information to config/autoload/global.php. Logging to the database is as easy as:

$logger = $this->getServiceLocator()->get('logger');
$logger->Info('Log this please!');

A test controller/action has been included (/DBLog)