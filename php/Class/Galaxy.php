<?php

class Galaxy {
    private $galaxyName;
    private $galaxyDiameter;
    private $galaxyType;
    private $galaxyDistance;
    private $galaxyNumStars;
    private $galaxyBlackholes;
    
    public function __toString() {
        $stars = ($this->galaxyNumStars == 0 ? "Number of Stars N/A" : "It has $this->galaxyNumStars stars");
        $galaxyDiameter = $this->galaxyDiameter == 0 ? "N/A" : $this->galaxyDiameter;
        return "
            The galaxy spans $galaxyDiameter lightyears across and is a(n) $this->galaxyType galaxy.\n
            $stars and it hosts this(ese) Blackhole(s): $this->galaxyBlackholes.\n
            We're $this->galaxyDistance million lightyears away from its center.
        ";
    }

    public function get_name() {
        return $this->galaxyName;
    }
}