<?php 
// a vérifier selon les besoins 
function fetchAllJoinedTablesByDate(PDO $db, int $instrumentID): array{
    $sql = "SELECT i.instrumentID id, i.titre title, i.description description, i.date_instrument date, ci.cat_instrument category, a.nom artist, a.wiki_url wiki, a.website_url website, m.idmedias media_id, m.type_media media_type, m.media_url media_url
            FROM instrument i 
            LEFT JOIN category_instrument ci ON i.category_instrument_categoryID = ci.categoryID 
            LEFT JOIN instrument_has_artiste iha ON i.instrumentID = iha.instrument_instrumentID 
            LEFT JOIN artiste a ON iha.artiste_artisteID = a.artisteID 
            LEFT JOIN media m ON i.instrumentID = m.instrumentID
            ORDER BY i.date_instrument DESC";


try{
    $prepare = $db->prepare($sql);
    $prepare->execute();
}catch(Exception $e){
    die($e->getMessage());
}
// création d'une variable qui contient le résultat pour retirer le return de cette ligne (bp -> bonne pratique)
$bp = $prepare->fetchAll(PDO::FETCH_ASSOC);
// on renvoie le résultat après la fermeture du jeu de résultat
return $bp;
}
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
