<?php
require_once "../config.php";
require_once "../model/ContactModel.php";
require_once "../model/InstrumentModel.php";
require_once "../model/UserModel.php";
require_once "../model/CategoryModel.php";
require_once "../model/MediaModel.php";
require_once "../model/ArtisteModel.php";

if(isset($_POST['username'],$_POST['user_pwd'])) {
    $connect = connectUserByUsername($connectPDO, $_POST['username'], $_POST['user_pwd']);
    if($connect === true) {
        header("location: ./");
        exit;
    }
}

// Chargement du menu pour toutes les pages 
$menu = getAllCategoryMenu($connectPDO);

if (isset($_GET['p']) && $_GET['p'] === "Propos"){

    require_once "../view/publicView/publicPropos.php";

}elseif (isset($_GET['p']) && $_GET['p'] === "Instruments"){
    
    if (isset($_GET['categoryID']) && ctype_digit($_GET['categoryID'])) {
        $categoryID = (int)$_GET['categoryID'];
        $recupcateg = recupCategoryById($connectPDO, $categoryID);
        $instruments = instrumentByCategory($connectPDO, $categoryID);
    }

    require_once "../view/publicView/publicInstruments.php";
}elseif (isset($_GET['p']) && $_GET['p'] === "ficheInstrument"){

    if (isset($_GET['instrumentID']) && ctype_digit($_GET['instrumentID'])) {
        $instrumentID = (int)$_GET['instrumentID'];
        $instrument = getInstrumentById($connectPDO, $instrumentID);
        $audio = getMediaByTypeAndInstrument($connectPDO, $instrumentID, 3);
        $image = getMediaByTypeAndInstrument($connectPDO, $instrumentID, 1);
        $video = getMediaByTypeAndInstrument($connectPDO, $instrumentID, 2);
        $artist = getArtistByInstrument($connectPDO, $instrumentID);
    }

    require_once "../view/publicView/publicFicheInstrument.php";
}elseif (isset($_GET['p']) && $_GET['p'] === "Contact"){

    require_once "../view/publicView/publicContact.php";

}elseif (isset($_GET['p']) && $_GET['p'] === "Category"){

    if (isset($_GET['categoryID']) && ctype_digit($_GET['categoryID'])) {
        $categoryID = (int)$_GET['categoryID'];
        $recupcateg = recupCategoryById($connectPDO, $categoryID);
        $instruments = instrumentByCategory($connectPDO, $categoryID);
    }

    require_once "../view/publicView/publicCategory.php";

}elseif (isset($_GET['p']) && $_GET['p'] === "ficheInstrument"){

    require_once "../view/publicView/publicFicheInstrument.php";
    
}else {
    // Appel des modèles

    // Appel de la vue
    require_once "../view/publicView/publicHomepage.php";

}
//var_dump($_POST);