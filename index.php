<?php
/**
 * Created by PhpStorm.
 * User: volodymyr
 * Date: 30.10.16
 * Time: 9:31
 */

require_once 'vendor/autoload.php';

$tel=new Television();
$tel->on();

$sam=new Samsung();
$sam->on();
$sam->printOut();


