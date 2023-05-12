<?php
# debug with file's name
# echo __FILE__;
# var_dump($_SESSION);

if (isset($_GET['disconnect'])) {
    // si déconnexion renvoie true
    if (deconnect()) {
        // redirection
        header("Location: ./");
        exit();
    }

    
}
if (isset($_GET['p']) && $_GET['p'] === "Update"){

    require_once "../view/privateView/privateUpdate.php";

}elseif (isset($_GET['p']) && $_GET['p'] === "Create"){

    require_once "../view/privateView/privateCreate.php";
    
}else {
    require_once "../view/privateView/privateHomepage.php";

}


var_dump($_SESSION);