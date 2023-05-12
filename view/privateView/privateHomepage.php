<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Insérer un article</title>
</head>
<body>
    <?php include_once "../includes/menuPrivateView.php";?>

    <div class="mb-4">
        <h1 class="fw-bolder mb-1">Accueil de l'administration</a></h3>
        <h4>Bienvenue <?=$_SESSION['userscreen']?></h4>
    </div>
    <div class="col-lg-12">
        <h3><?php if(isset($_GET['m'])) echo $_GET['m']; ?></h3>
                <?php
            // Pas de post
            if($postCount==0):
                            ?>
            <h3>Pas encore d'article sur votre site</h3>
                            <?php
            // on a des post                
            else:
                            ?>
            <h3>Nous avons <?=$postCount?> instrument(s)</h3>
            <table cellpadding=10>
                <thead>
                    <tr>
                        <th>instrumentID</th>
                        <th>titre</th>
                        <th>description</th>
                        <th>date_instrument</th>
                        <th>visible</th>
                        <th>userscreen</th>
                        <th>category_instrument_categoryID</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead><tbody>

            <tr style="background-color:<?=$color?>;">
                <td><?=$item['instrumentID']?></td>
                        <td><?=$item['titre']?></td>
                        <td><?=$item['description']?></td>
                        <td><?=$item['date_instrument']?></td>
                        <td><?=$link?></td>
                        <td><?=$item['userscreen']?></td>
                        <td><?=$item['category_instrument_categoryID']?></td>
                        <td><a href="?updatePost=<?=$item['instrumentID']?>">update</a></td>
                        <td><a onclick="void(0);let a=confirm('Voulez-vous vraiment supprimer \'<?=$item['titre']?>\' ?'); if(a){ document.location = '?deletePost=<?=$item['instrumentID']?>'; };" href="#">delete</a></td>
            </tr>

            </tbody>
            </table>
                <?php
            endif;
                            ?>
        </div>
</body>
</html>
