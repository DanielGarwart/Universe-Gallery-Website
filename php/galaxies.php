<?php
require_once 'Class/Galaxy.php';
require_once 'master.php';
require_once 'ui/functions.php';

session_start();

$galaxies = $man->query_class(
    "galaxies", 
    "tblgalaxies", 
    "Galaxy"
);

?>

<html>
    <?= head("Galaxies", "galaxy") ?>
<body>
    <div>
        <?= headerBox("A Compendium Of Galaxies") ?>
        <?= uiFeed($galaxies, "galaxies") ?>
    </div>
</body>
</html>                