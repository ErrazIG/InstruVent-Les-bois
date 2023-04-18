<?php
# debug with file's name
# echo __FILE__;
# var_dump($_SESSION);

require_once 'InstrumentModel.php'; 
require_once 'MailModel.php';
require_once 'UserModel';
require_once 'ArtisteModel.php';
require_once 'MediaModel.php';

if (isset($_GET['disconnect'])) {
    // si déconnexion renvoie true
    if (deconnect()) {
        // redirection
        header("Location: ./");
        exit();
    }

/* A modifier ou supprimer, adapter 


// on veut ajouter un Post   
}elseif(isset($_GET['createPost'])){

    // si on a envoyé le formulaire
    if(isset($_POST['title'],$_POST['content'],$_POST['user_id'])){
        $UserId = (int) $_POST['user_id'];
        $postTitle = htmlspecialchars(strip_tags(trim($_POST['title'])),ENT_QUOTES);
        $postContent = htmlspecialchars(strip_tags(trim($_POST['content'])),ENT_QUOTES);
        $idCateg = (isset($_POST['category_id'])&&is_array($_POST['category_id']))? $_POST['category_id'] : [];

        // EXERCICE Pouvoir insérer un article AVEC ses catégories
        postAdminInsert($connectPDO,$UserId,$postTitle,$postContent,$idCateg);
    }

    // Appel des catégories pour le multi-choix dans le formulaire
    $categoryChoice = getAllCategoryMenu($connectPDO);

    // Appel des utilisateurs
    $userChoice = getAllUsers($connectPDO);

    // appel de la vue pour insertion
    include "../view/privateView/privateInsertView.php";

// on veut supprimer un post    
}elseif(isset($_GET['deletePost'])&&ctype_digit($_GET['deletePost'])){

    $postId = (int) $_GET['deletePost'];

    if(postAdminDeleteById($connectPDO,$postId)){
        header("Location: ./?m=L'article dont l'id est $postId a été supprimé");
        exit();
    }else{
        header("Location: ./?m=Problème lors de la modification de l'article!");
        exit();
    }

// accueil    
}else{
    // appel due la méthode (fonction) modèle PostModel pour afficher tous les articles SANS restrictions
    $postAll = postAdminHomepageAll($connectPDO);
    // on compte le nombre d'articles
    $postCount = count($postAll);
    // appel de la vue de l'accueil
    include "../view/privateView/privateHomepageView.php"; */

}