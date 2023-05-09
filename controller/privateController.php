<?php
# debug with file's name
# echo __FILE__;
# var_dump($_SESSION);

require_once '../model/InstrumentModel.php'; 
require_once '../model/MailModel.php';
require_once '../model/UserModel';
require_once '../model/ArtisteModel.php';
require_once '../model/MediaModel.php';

if (isset($_GET['disconnect'])) {
    // si déconnexion renvoie true
    if (deconnect()) {
        // redirection
        header("Location: ./");
        exit();
    }

    
}


