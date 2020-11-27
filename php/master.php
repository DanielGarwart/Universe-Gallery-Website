<?php

require_once 'data/DataBaseManager.php';

// Don't do this in production
$man = new DataBaseManager("localhost", "root", "");

// NOTE Databases
$man->connect(["galaxies"]);
$man->connect(["planets"]);
$man->connect(["mysteries"]);