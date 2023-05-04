<?php
# menu - to PDO with query
function getAllCategoryMenu(PDO $db): array {
    $sql ="SELECT categoryID, cat_instrument FROM category_instrument ORDER BY categoryID ASC";
    try{
        $query=$db->query($sql);
    }catch(Exception $e){
        die($e->getMessage());
    }
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

// récupère une catégorie complète
function recupCategoryById(PDO $db,int $categoryID):array{
    $recup = "SELECT * FROM category_instrument where categoryID=?";
    $prepare = $db -> prepare($recup);
    try{
        $prepare->execute([$categoryID]);
    }catch(Exception $e){
        die($e->getMessage());
    }
    $bp = $prepare->fetch(PDO::FETCH_ASSOC);
    $prepare->closeCursor();
    return $bp;
}

// Récupérer les instruments par catégorie avec leur image
function instrumentByCategory(PDO $db, int $categoryID): array {
    $sql = "SELECT instrument.*, media.media_url
            FROM instrument
            LEFT JOIN media ON instrument.instrumentID = media.instrumentID
            WHERE instrument.categoryID = ? AND media.type_media = 1";
    $stmt = $db->prepare($sql);
    try {
        $stmt->execute([$categoryID]);
    } catch (Exception $e) {
        die($e->getMessage());
    }
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}