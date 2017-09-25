<?php

namespace Bavix\Tests;

use PHPUnit\Framework\TestCase;

class Unit extends TestCase
{

    /**
     * @var Tmp
     */
    protected $tmp;

    protected function setUp()
    {
        parent::setUp();
        $this->tmp = new Tmp();
    }

}
