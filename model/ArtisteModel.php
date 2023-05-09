<?php 
function getArtistByInstrument(PDO $db, int $instrumentID): array {
    $sql = "SELECT artiste.*
            FROM artiste
            INNER JOIN instrument_has_artiste ON artiste.artisteID = instrument_has_artiste.artiste_artisteID
            WHERE instrument_has_artiste.instrument_instrumentID = ?";
    $prepare = $db->prepare($sql);
    try {
        $prepare->execute([$instrumentID]);
    } catch (Exception $e) {
        die($e->getMessage());
    }
    return $prepare->fetch(PDO::FETCH_ASSOC);
}

// function createArtiste name urlwiki urlsiteweb
function createArtiste(PDO $db, string $nom, string $wiki_url, string $website_url): bool {
    // Préparer la requête SQL
    $sql = "INSERT INTO artiste (nom, wiki_url, website_url) VALUES (:nom, :wiki_url, :website_url)";
    $prepare = $db->prepare($sql);

    // Lier les paramètres
    $prepare->bindParam(':nom', $nom);
    $prepare->bindParam(':wiki_url', $wiki_url);
    $prepare->bindParam(':website_url', $website_url);

    // Exécuter la requête et vérifier si l'insertion a réussi
    if ($prepare->execute()) {
        return true;
    } else {
        return false;
    }
}

// function readArtisteByID name urlwiki urlsiteweb where id
function getOneArtisteByID(PDO $db, int $uid): array|bool {

    $sql="SELECT nom, wiki_url, website_url FROM artiste WHERE artisteID=?";
    $prepare=$db->prepare($sql);
    try{
        $prepare->execute([$uid]);
    }catch(Exception $e){
        die($e->getMessage());
    }
    $return = $prepare->fetch(PDO::FETCH_ASSOC);
    $prepare->closeCursor();
    return $return;
    }

// function readArtisteByName urlwiki urlsiteweb where name=
function getArtisteByName(PDO $db, string $nom): array {
    $sql = "SELECT /* artisteID, nom,*/ wiki_url, website_url FROM artiste WHERE nom = :nom";
    $prepare = $db->prepare($sql);

    // lier les paramètres
    $prepare->bindParam(':nom', $nom);

    // exécuter la requête
    $prepare->execute();

    // récupérer les résultats
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

// Mettre à jour le nom de l'artiste par son ID
// function updateArtisteNamebyID
function updateArtisteNameByID(PDO $db, int $artisteID, string $newNom) {
    $sql = "UPDATE artiste SET nom = :newNom WHERE artisteID = :artisteID";
    $prepare = $db->prepare($sql);

    $prepare->bindParam(':newNom', $newNom);
    $prepare->bindParam(':artisteID', $artisteID);

    return $prepare->execute();
}

// Mettre à jour l'URL du wiki de l'artiste par son ID
// function updateArtisteWikiByID
function updateArtisteWikiByID(PDO $db, int $artisteID, string $newWikiUrl) {
    $sql = "UPDATE artiste SET wiki_url = :newWikiUrl WHERE artisteID = :artisteID";
    $prepare = $db->prepare($sql);

    $prepare->bindParam(':newWikiUrl', $newWikiUrl);
    $prepare->bindParam(':artisteID', $artisteID);

    return $prepare->execute();
}

// Mettre à jour l'URL du site web de l'artiste par son ID
// function updateArtisteWebsiteByID
function updateArtisteWebsiteByID(PDO $db, int $artisteID, string $newWebsiteUrl) {
    $sql = "UPDATE artiste SET website_url = :newWebsiteUrl WHERE artisteID = :artisteID";
    $prepare = $db->prepare($sql);

    $prepare->bindParam(':nouveauWebsiteUrl', $newWebsiteUrl);
    $prepare->bindParam(':artisteID', $artisteID);

    return $prepare->execute();
}
// function deleteArtisteByID 
function deleteArtisteByID(PDO $db, int $artisteID):bool{
    $sql="DELETE FROM `artiste` Where id=$artisteID";
    try{
        return ($db->exec($sql))? true : false;
    }catch(Exception $e){
        die($e->getMessage());
    }
}

