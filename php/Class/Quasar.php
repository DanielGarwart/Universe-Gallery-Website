<?php

class Quasar {
    private $name;
    private $subType;

    public function __toString() {
        return "The Quasar is $this->subType";
    }

    public function get_name() {
        return $this->name;
    }
}