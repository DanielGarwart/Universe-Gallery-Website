<?php

class Planet {
    private $pname;
    private $diameter;
    private $year_length;
    private $life;
    private $ptype;
    private $star;
    private $age;

    public function get_name() {
        return $this->pname;
    }

    public function what_star() {
        return $this->star;
    }

    public function __toString() {
        $diameter = ($this->diameter == 0 ? "The planet's diameter is N/A" : "The planet spans " . $this->diameter . " km across");

        return "
            $diameter and it's a $this->ptype planet.\n
            Does it host life? " . ($this->life ? "Yes. " : "No. ") . "It's $this->age billion years old.
            A year on it is $this->year_length earth years long.
        ";
    }
}