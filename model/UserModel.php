<?php

/**
 * 
 * @param PDO $db
 * @param int $iduser
 * @return array|null
 */

 
function getOneUserById(PDO $db, int $uid): array|bool {

    $sql="SELECT userID, username FROM user WHERE userID=?";
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

    function connectUserByUsername(PDO $db, string $uname, string $pass) :bool|string {
        // select user, même si le mot de passe n'est pas bon
    $sql="SELECT * FROM user WHERE username=?";
    $prepare=$db->prepare($sql);
    try{
        $prepare->execute([$uname]);
    }catch(Exception $e){
        die($e->getMessage());
    }
    if($prepare->rowCount()==1){
        $response=$prepare->fetch(PDO::FETCH_ASSOC);
        // est-ce que le mot de passe est dans la DB, crypé et correspond à l'entrée utilisateur
        if(password_verify($pass,$response['user_pdw'])){
            // création d'une session qui renvera true
            // injection dans la variable de session du contenu de la requête
            $_SESSION=$response;
            // suppression de variables inutiles dans $_SESSION
            unset($_SESSION['user_pdw'],$_SESSION['uniqID']);
            // id utilisée pour créé la variable de session
            $_SESSION['userID']=session_id();

            return true;
        }else{
            return "Login et/ou mot de passe incorrecte"; // Password
        }
    }else{
        return "Login et/ou mot de passe incorrecte"; //Login
    }

}

// déconnexion
function deconnect(): bool{
    # réinitialisation du tableau/variable $_SESSION)
    $_SESSION = [];

    # suppression du cookie
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    # Destruction du fichier lié sur le serveur
    session_destroy();

    return true;
}