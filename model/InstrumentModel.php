<?php 
// supprime le dernier ' ' espace si il existe
function trunCate (string $text): string{
    $cut = strrpos($text, ' ');
    return substr ($text, 0,$cut);
}

// date fr
  // Convertit une date ou un timestamp en français//
  function dateToFrench(string $date, string $format="l j F Y \à h \h i "): string{
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date) ) ) );}


    /*
ADMIN FUNCTIONS
*/
// Insérer un nouvel instrument, gérer les artistes et les médias associés à l'instrument
function createInstrument(PDO $db, string $titre, string $description, int $categoryID) {
    try {
        // Insérer l'instrument
        $sql = "INSERT INTO instrument (titre, description, category_instrument_categoryID) VALUES (?, ?, ?)";
        $prepare = $db->prepare($sql);
        $prepare->execute([$titre, $description, $categoryID]);

        
    } catch (Exception $e) {
        // Gérer les exceptions PDO
        echo "Erreur lors de l'insertion de l'instrument : " . $e->getMessage();
    } 
}


// Mettre à jour un instrument, sa CatégorieID, son Titre, sa Description, 
function updateInstrument(PDO $db, $instrumentID, $categoryID, $titre, $description){
    $sql = "UPDATE instrument SET category_instrument_categoryID = :categoryID, titre = :titre, description = :description WHERE instrumentID = :instrumentID";
    $prepare = $db->prepare($sql);
    try {
        $prepare->bindParam(':instrumentID', $instrumentID, PDO::PARAM_INT);
        $prepare->bindParam(':categoryID', $categoryID, PDO::PARAM_INT);
        $prepare->bindParam(':titre', $titre, PDO::PARAM_STR);
        $prepare->bindParam(':description', $description, PDO::PARAM_STR);
        $prepare->execute();
        return true;
    } catch (Exception $e) {
        error_log("Erreur lors de la mise à jour de l'instrument : " . $e->getMessage());
        return false;
    }
}


/*
// Associer un ou des artistes à un instrument
function associateArtistsToInstrument(PDO $db, $instrumentID, array $artistIDs) {
    $sql = "INSERT INTO instrument_has_artiste (instrument_instrumentID, artiste_artisteID) VALUES (?, ?)";
    $prepare = $db->prepare($sql);
    foreach ($artistIDs as $artistID) {
        $prepare->execute([$instrumentID, $artistID]);
    }
}
// Récupérer un instrument et ses artistes associés
function getInstrumentWithArtists(PDO $db, $instrumentID) {
    $sql = "SELECT i.*, a.artisteID, a.nom
            FROM instrument i
            JOIN instrument_has_artiste iha ON i.instrumentID = iha.instrument_instrumentID
            JOIN artiste a ON iha.artiste_artisteID = a.artisteID
            WHERE i.instrumentID = ?";
    $prepare = $db->prepare($sql);
    $prepare->execute([$instrumentID]);
    return $prepare->fetchAll(PDO::FETCH_ASSOC);
}
*/
/*
//Récupérer un instrument
function getInstrumentByID(PDO $db, $instrumentID) {
    $sql = "SELECT * FROM instrument WHERE instrumentID = ?";
    $prepare = $db->prepare($sql);
    try {
        $prepare->execute([$instrumentID]);
        $db = $prepare->fetch(PDO::FETCH_ASSOC);
        return $db;
    } catch (Exception $e) {
        error_log("Erreur lors de la récupération de l'instrument : " . $e->getMessage());
        return false;
    }
}
*/
function getInstrumentById(PDO $db, int $instrumentID): array {
    $sql = "SELECT instrument.*, media.media_url
            FROM instrument
            LEFT JOIN media ON instrument.instrumentID = media.instrumentID
            WHERE instrument.instrumentID = ? AND media.type_media = 1";
    $prepare = $db->prepare($sql);
    try {
        $prepare->execute([$instrumentID]);
    } catch (Exception $e) {
        die($e->getMessage());
    }
    return $prepare->fetch(PDO::FETCH_ASSOC);
}

//Récupérer tout les isntruments avec Artistes et Médias
function getAllInstrumentsWithArtistsAndMedia(PDO $db){
    $sql = "SELECT i.*, a.*, m.*
            FROM instrument i
            LEFT JOIN instrument_has_artiste iha ON i.instrumentID = iha.instrument_instrumentID
            LEFT JOIN artiste a ON iha.artiste_artisteID = a.artisteID
            LEFT JOIN media m ON i.instrumentID = m.instrumentID";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $results = $prepare->fetchAll(PDO::FETCH_ASSOC);

    // Traitez les résultats pour regrouper les données par instrument
    $instruments = [];
    foreach ($results as $row) {
        $instrumentID = $row['instrumentID'];

        // Créer un nouvel instrument s'il n'existe pas encore
        if (!isset($instruments[$instrumentID])) {
            $instruments[$instrumentID] = [
                'instrumentID' => $row['instrumentID'],
                'titre' => $row['titre'],
                'description' => $row['description'],
                'date_instrument' => $row['date_instrument'],
                'category_instrument_categoryID' => $row['category_instrument_categoryID'],
                'artistes' => [],
                'media' => [],
            ];
        }

        // Ajouter l'artiste à l'instrument
        if (!empty($row['artisteID'])) {
            $instruments[$instrumentID]['artistes'][] = [
                'artisteID' => $row['artisteID'],
                'nom' => $row['nom'],
                'wiki_url' => $row['wiki_url'],
                'website_url' => $row['website_url'],
            ];
        }

        // Ajouter le média à l'instrument
        if (!empty($row['idmedias'])) {
            $instruments[$instrumentID]['media'][] = [
                'idmedias' => $row['idmedias'],
                'instrumentID' => $row['instrumentID'],
                'type_media' => $row['type_media'],
                'media_url' => $row['media_url'],
            ];
        }
    }

    // Convertir les instruments en tableau indexé
    $instruments = array_values($instruments);

    return $instruments;
}

// Supprimer un instrument 
function deleteInstrument(PDO $db, $instrumentID) {
    $sql = "DELETE FROM instrument WHERE instrumentID = ?";
    $prepare = $db->prepare($sql);
    try {
        return $prepare->execute([$instrumentID]);
    } catch (Exception $e) {
        error_log("Erreur lors de la suppression de l'instrument : " . $e->getMessage());
        return false;
    }
}