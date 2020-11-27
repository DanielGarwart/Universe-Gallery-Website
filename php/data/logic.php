<?php

require_once '../master.php';
require_once './files/file_transfer.php';

if(isset($_GET['upt'])) {
    switch($_POST['insert']) {
        case 'planet':
            require_once 'forms/planet.php';
        break;
        case 'galaxy':
            require_once 'forms/galaxy.php';
        break;
    }
}

if(isset($_POST['planetForm'])) {
    uploadFile("img/planets/", "planet_img", "jpeg");

    $man->manage_db(
        "planets",
        "INSERT INTO tblPlanets(pname,diameter,year_length,life,ptype,star,age,f_starID) VALUES
        ('{$_POST['pname']}','{$_POST['diameter']}','{$_POST['year_length']}','{$_POST['life']}','{$_POST['ptype']}','{$_POST['star']}','{$_POST['age']}','{$_POST['f_starID']}')
        "
    );
} else if(isset($_POST['galaxyForm'])) {
    $blackhole = isset($_POST['gblackhole']) ? $_POST['gblackhole'] : "N/A";
    $man->manage_db(
        "galaxies",
        "INSERT INTO tblGalaxies(galaxyName,galaxyDiameter,galaxyType,galaxyDistance,galaxyNumStars,galaxyBlackholes) VALUES
        ('{$_POST['gname']}','{$_POST['gdiameter']}','{$_POST['gtype']}','{$_POST['gdistance']}',{$_POST['gnumstars']}, {$blackhole})"
    );
} else {
    // ...
}