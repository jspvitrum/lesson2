<?php

/**
 * Created by PhpStorm.
 * User: volodymyr
 * Date: 30.10.16
 * Time: 10:25
 */

require_once 'vendor/autoload.php';

abstract class Model
{
    public function printOut()
    {
        $factory = new RandomLib\Factory;
        $generator = $factory->getGenerator(new SecurityLib\Strength(SecurityLib\Strength::MEDIUM));
        $model = $generator->generateInt(5, 15000);
        $factory=$randomString = $generator->generateString(4, 'GHRSDVBNHEUHJHFDS');
        echo "Samsung ",$factory, $model;
    }
}