<?php

namespace Bavix\Tests;

abstract class Bind
{

    /**
     * @param object $object
     * @param string $attr
     *
     * @return mixed
     */
    public static function getProperty($object, $attr)
    {
        $closure = \Closure::bind(function () use ($attr) {
            return $this->$attr;
        }, $object, \get_class($object));

        return $closure();
    }

    /**
     * @param object $object
     * @param string $attr
     * @param mixed  $value
     *
     * @return mixed
     */
    public static function setProperty($object, $attr, $value)
    {
        $closure = \Closure::bind(function ($value) use ($attr) {
            $this->$attr = $value;
        }, $object, \get_class($object));

        return $closure($value);
    }

}
