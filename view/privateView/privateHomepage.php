<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Accueil Admin</title>
</head>
<body>
<?php include_once "../includes/privateMenu.php";?>

<div class="mb-4">
    <h1 class="fw-bolder mb-1">Accueil de l'administration</a></h3>
    <h4>Bienvenue <?=$_SESSION['username']?></h4>
</div>
<div class="col-lg-12">
    <h3><?php if(isset($_GET['p'])) echo $_GET['p']; ?></h3>
            <?php
        // Pas de post
        if( sizeof($instrumentsInfos) == 0):
                        ?>
        <h3>Pas encore d'article sur votre site</h3>
                        <?php
        // on a des post                
        else:
                        ?>
        <h3>Nous avons <?= sizeof($instrumentsInfos) ?> instrument(s)</h3>
        <table cellpadding=10>
            <thead>
                <tr>
                    <th>instrumentID</th>
                    <th>titre</th>
                    <th>description</th>
                    <th>date_instrument</th>
                    <th>visible</th>
                    <th>username</th>
                    <th>category_instrument_categoryID</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead><tbody>

        <?php foreach($instrumentsInfos as $instrumentInfo): ?>
        
        <tr>
            <td><?=$instrumentInfo['instrumentID']?></td>
            <td><?=$instrumentInfo['titre']?></td>
            <td><?=$instrumentInfo['description']?></td>
            <td><?=$instrumentInfo['date_instrument']?></td>
            <td><?=$instrumentInfo['category_instrument_categoryID']?></td>
            <td><a href="?updatePost=<?=$instrumentInfo['instrumentID']?>">update</a></td>
            <td><a onclick="void(0);let a=confirm('Voulez-vous vraiment supprimer \'<?=$instrumentInfo['titre']?>\' ?'); if(a){ document.location = '?deletePost=<?=$instrumentInfo['instrumentID']?>'; };" href="#">delete</a></td>
        </tr>
        
        <?php endforeach; ?>

        </tbody>
        </table>
            <?php endif; ?>
    </div>
</body>
</html>
