<?php
function getMediaByTypeAndInstrument(PDO $db, int $instrumentID, int $type): array {
    $sql = "SELECT * FROM media WHERE instrumentID = ? AND type_media = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$instrumentID, $type]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Vérifier si le résultat est un tableau et non un booléen
    if (is_array($result)) {
        return $result;
    } else {
        return []; // Retourner un tableau vide si le résultat est un booléen
    }
}

// créer un média
function createMedia(PDO $db, int $instrumentID, int $type_media, string $media_url): bool {
    $sql = "INSERT INTO media (instrumentID, type_media, media_url) VALUES (:instrumentID, :type_media, :media_url)";
    $prepare = $db->prepare($sql);

    $prepare->bindParam(':instrumentID', $instrumentID);
    $prepare->bindParam(':type_media', $type_media);
    $prepare->bindParam(':media_url', $media_url);

    return $prepare->execute();
}

// lire tous les médias
function readAllMedia(PDO $db): array {
    $sql = "SELECT * FROM media";
    $prepare = $db->prepare($sql);
    $prepare->execute();

    return $prepare->fetchAll();
}

// lire un média par son ID
function readMediaByID(PDO $db, int $idmedias): array {
    $sql = "SELECT * FROM media WHERE idmedias = :idmedias";
    $prepare = $db->prepare($sql);

    $prepare->bindParam(':idmedias', $idmedias);
    $prepare->execute();

    return $prepare->fetch();
}

// mettre à jour un média par son ID
function updateMedia(PDO $db, int $idmedias, int $instrumentID, int $type_media, string $media_url): bool {
    $sql = "UPDATE media SET instrumentID = :instrumentID, type_media = :type_media, media_url = :media_url WHERE idmedias = :idmedias";
    $prepare = $db->prepare($sql);

    $prepare->bindParam(':idmedias', $idmedias);
    $prepare->bindParam(':instrumentID', $instrumentID);
    $prepare->bindParam(':type_media', $type_media);
    $prepare->bindParam(':media_url', $media_url);

    return $prepare->execute();
}

// supprimer un média par son ID
function deleteMedia(PDO $db, int $idmedias): bool {
    $sql = "DELETE FROM media WHERE idmedias = :idmedias";
    $prepare = $db->prepare($sql);

    $prepare->bindParam(':idmedias', $idmedias);

    return $prepare->execute();
}