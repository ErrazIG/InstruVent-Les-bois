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

    <form action="" method="POST">
        <input type="text" name="titre" placeholder="titre">
        <input type="text" name="description" placeholder="description">
        <select name="category_instrument_categoryID" id="">
<?php foreach($allCateg as $item): ?>
    <option value="<?= $item['categoryID']?>"><?= $item['cat_instrument']?></option>
    <?php endforeach; ?>
    <input type="submit" value="Envoyer">
        </select>
    </form>
    <?php //var_dump($_POST); ?>

    <?php include "../includes/privateFooter.php"; ?>
</body>
</html>
