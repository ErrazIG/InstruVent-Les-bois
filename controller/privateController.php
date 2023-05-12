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


var_dump($_SESSION);
?>
<a href="?disconnect"> Se Deco</a>