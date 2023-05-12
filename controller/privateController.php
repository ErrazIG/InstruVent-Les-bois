<?php
# debug with file's name
# echo __FILE__;
# var_dump($_SESSION);

$allCateg = getAllCategoryMenu($connectPDO);
$instrumentsInfos = getAllInstrumentsWithArtistsAndMedia($connectPDO);
//var_dump($instrumentsInfos);

if (isset($_GET['disconnect'])) {
    // si déconnexion renvoie true
    if (deconnect()) {
        // redirection
        header("Location: ./");
        exit();
    }  
}

if (isset($_GET['p']) && $_GET['p'] === "Update"){
// Récupérer l'instrument à modifier
$instrumentID = $_GET['instrumentID'];
$instrument = getInstrumentWithArtistsAndMedia($db, $instrumentID);

// Récupérer toutes les catégories
$categories = getAllCategories($db);
    require_once "../view/privateView/privateUpdate.php";

}elseif (isset($_GET['p']) && $_GET['p'] === "Create"){
    if(isset($_POST['titre'],$_POST['description'],$_POST['category_instrument_categoryID'])) {
        $newinstrument = createInstrument($connectPDO,$_POST['titre'], $_POST['description'], $_POST['category_instrument_categoryID']);
        echo 'Instrument ajouté avec succès';
    }


    require_once "../view/privateView/privateCreate.php";
    
}elseif (isset($_GET['deletePost'])) {
    $deleted = deleteInstrument($connectPDO, $_GET['deletePost']);
    if($deleted) {
        header("Location: ?p=HomePage");
        exit();
    }
}else {
    require_once "../view/privateView/privateHomepage.php";

}


//var_dump($_SESSION);