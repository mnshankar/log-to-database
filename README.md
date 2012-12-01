log-to-database
===============

Log to a MySql database in Zend Framework 2

While database logging in ZF2 maintains much the same functionality as with ZF1, 
there is a difference in the way "custom" database columns are handled by ZF2(using the 'extra' array as 
opposed to the setEventItem() method) - This module demonstrates how to log messages to a database table in a flexible way.

Installation and Use:
---------------------
Run the logger.SQL script to create a table with the required columns. The 'extra' columns used in this module are "username", "url" and "ipaddress".
Of course you can add columns depending on your requirement (remember to add your custom fields in the fieldmap in module.config.php though)
 - Note that in this module, the url and ipaddress fields are injected in the onBootstrap event in Module.php. The username
field is added in the dblog controller (i.e. as and when it becomes available).

Use
------
Drop DBLog into your module or vendor folder, add database adapter information to config/autoload/global.php. 
Add 'DBLog' module to 'application.config.php'. Logging to the database is as easy as:

$logger = $this->getServiceLocator()->get('logger');
$logger->addExtra(array('username'=>'test'));
$logger->Info('Log this please!');

Note that the addExtra() method does an array_merge.. so you can add fields anywhere along the request cycle.

A test controller/action has been included (/DBLog)