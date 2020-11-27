<?php

class Nebula {
    private $name;
    private $type;
    private $distance;
    private $diameter;
    private $makeup;

    public function __toString() {
        return "
            This is a(n) $this->type nebula, that spans $this->diameter lightyears.
            It's $this->distance lightyears away it is made out of: $this->makeup.
        ";
    }

    public function get_name() {
        return $this->name;
    }
}