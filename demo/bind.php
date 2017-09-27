<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

class Obj
{
    protected $a = 123;
}

$obj = new Obj();

\Bavix\Tests\Bind::setProperty($obj, 'a', 321);

var_dump(\Bavix\Tests\Bind::getProperty($obj, 'a'));
