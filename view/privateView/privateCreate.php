<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>
    <?php include_once "../includes/privateMenu.php";?>

    <h1 style="text-align: center; margin-top:2%; padding: 1%;">Ajouter un instrument</h1>

    <form action="" method="POST" class="form-create-admin">
        <label class="input-create" for="">Titre :</label>
        <input class="input-create" type="text" name="titre" placeholder="" required>
        <label class="input-create" for="">Description :</label>
        <input class="input-create" type="text" name="description" placeholder="" required>
        <label class="input-create" for="">Catégorie :</label>
        <select class="input-create" name="category_instrument_categoryID" id="" required>
<?php foreach($allCateg as $item): ?>
    <option class="input-create" value="<?= $item['categoryID']?>"><?= $item['cat_instrument']?></option>
    <?php endforeach; ?>
    <input class="input-create btn-create" type="submit" value="Envoyer">

        </select>
    </form>
    <?php //var_dump($_POST); ?>

    <?php include "../includes/privateFooter.php"; ?>
</body>
</html>
