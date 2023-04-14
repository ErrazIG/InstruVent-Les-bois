<?php
echo __FILE__;


if (isset($_GET['p']) && $_GET['p'] === "Propos"){

    require_once "../view/publicView/publicPropos.php";

}elseif (isset($_GET['p']) && $_GET['p'] === "Instruments"){

    require_once "../view/publicView/publicInstruments.php";

}elseif (isset($_GET['p']) && $_GET['p'] === "Contact"){

    require_once "../view/publicView/publicContact.php";

}else {

    require_once"../view/publicView/publicHomepage.php";

}
