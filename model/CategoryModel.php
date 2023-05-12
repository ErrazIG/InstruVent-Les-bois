<?php
# menu - to PDO with query
function getAllCategoryMenu(PDO $db): array {
    $sql ="SELECT categoryID, cat_instrument, cat_img FROM category_instrument ORDER BY categoryID ASC";
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
            INNER JOIN (
                SELECT instrumentID, MIN(idmedias) as idmedias
                FROM media
                WHERE type_media = 1
                GROUP BY instrumentID
            ) AS subquery ON instrument.instrumentID = subquery.instrumentID
            LEFT JOIN media ON subquery.idmedias = media.idmedias
            WHERE instrument.category_instrument_categoryID = ?";
    $prepare = $db->prepare($sql);
    try {
        $prepare->execute([$categoryID]);
    } catch (Exception $e) {
        die($e->getMessage());
    }
    return $prepare->fetchAll(PDO::FETCH_ASSOC);
}

// Récupérer les instruments par catégorie avec leurs 3 image chacuns
function allInstrumentByCategory(PDO $db, int $categoryID): array {
    $sql = "SELECT instrument.*, media.media_url
            FROM instrument
            LEFT JOIN media ON instrument.instrumentID = media.instrumentID
            WHERE instrument.category_instrument_categoryID = ? AND media.type_media = 1";
    $prepare = $db->prepare($sql);
    try {
        $prepare->execute([$categoryID]);
    } catch (Exception $e) {
        die($e->getMessage());
    }
    return $prepare->fetchAll(PDO::FETCH_ASSOC);
}
