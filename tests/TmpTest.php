<?php

namespace Tests;

use Bavix\Tests\Unit;

class TmpTest extends Unit
{

    public function testDestruct()
    {
        $this->tmp->__destruct();
        $this->assertFileNotExists((string)$this->tmp);
    }

    public function testExists()
    {
        $this->assertFileExists((string)$this->tmp);
    }

    public function testTmp()
    {
        $this->assertTrue(\is_string((string)$this->tmp));
    }

}
