<?php
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
