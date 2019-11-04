<?php

namespace block_mytest;
defined('MOODLE_INTERNAL') || die();

class model {
    private $properties = [];

    public function __get($name)
    {
        if (!isset($this->properties[$name])) {
            throw new \Exception("No property call ($name)");
        }

        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name)
    {
        return $this->properties[$name];
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }
}
