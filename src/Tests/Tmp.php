<?php

namespace Bavix\Tests;

class Tmp
{

    /**
     * @var string
     */
    protected $file;

    /**
     * Tmp constructor.
     */
    public function __construct()
    {
        $this->file = tempnam(sys_get_temp_dir(), 'bavix');
        \touch($this->file);

        register_shutdown_function([$this, '__destruct']);
    }

    public function __destruct()
    {
        if (file_exists($this->file))
        {
            unlink($this->file);
        }
    }

    public function __toString()
    {
        return (string)$this->file;
    }

}
