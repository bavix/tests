<?php

namespace Tests;

use Bavix\Tests\Bind;
use Bavix\Tests\Unit;

class BindTest extends Unit
{

    public function testGetProperty()
    {
        $this->assertSame(
            (string)$this->tmp,
            Bind::getProperty($this->tmp, 'file')
        );
    }

    public function testSetProperty()
    {
        $file = __FILE__ . '.tmp';
        Bind::setProperty($this->tmp, 'file', $file);

        $this->assertSame(
            (string)$this->tmp,
            $file
        );
    }

}
