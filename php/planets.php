<?php

require_once 'Class/Planet.php';
require_once 'master.php';
require_once 'ui/functions.php';

session_start();

$planets = [];
$stars = $man->query_data("planets", "SELECT starName FROM tblstars;");

?>

<!DOCTYPE html>
<html lang = "en">
<?= head("Planets", "planet") ?>
<body>

<div>
<?php
foreach($stars as $star) {

    $planets = $man->query_class(
        "planets",
        "tblplanets where star='$star[0]'",
        "Planet"
    );

    echo headerBox("The Planets In The $star[0] Solar System");
    echo uiFeed($planets, "Planets");
}
?>

</div>
</body>
</html>