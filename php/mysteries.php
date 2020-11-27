<?php

require_once 'Class/Nebula.php';
require_once 'Class/Quasar.php';
require_once 'master.php';
require_once 'ui/functions.php';

$nebulae = $man->query_class("mysteries", "tblnebulae", "Nebula");
$quasars = $man->query_class("mysteries", "tblquasars", "Quasar");
//*/

?>

<html>
    <?= head("Mysteries", "mystery") ?>
<body>

    <h1>Space Mysteries</h1>

    <div>
        <?= headerBox("A Compendium of Various Nebulae") ?>
        <?= uiFeed($nebulae, "nebulae") ?>
    </div>

    <div>
        <?= headerBox("A Compendium of Quasars") ?>
        <?= uiFeed($quasars, "quasars") ?>
    </div>

</body>
</html>