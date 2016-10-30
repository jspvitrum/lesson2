<?php
/**
 * Created by PhpStorm.
 * User: volodymyr
 * Date: 30.10.16
 * Time: 9:31
 */

require_once 'NamespaceAutoloader.php';
$autoloader = new NamespaceAutoloader();
$autoloader->addNamespace('lesson2', 'classes');
$autoloader->register();

use lesson2\classes\Television;
use lesson2\classes\Samsung;

//spl_autoload_register(function ($Television) {
//    include $Television . '.php';
//});


$tel=new Television();
$tel->on();



$sam=new Samsung();
$sam->on();
//$sam->printOut();


