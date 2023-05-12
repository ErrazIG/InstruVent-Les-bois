<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Insérer un article</title>
</head>
<body>
    <?php include_once "../includes/privateMenu.php";?>

    <div>
        <h1>Insérer un article</h1>
        <h3>Accueil de l'administration</a></h3>
        <h4>Bienvenue <?=$_SESSION['userscreen']?></h4>
    </div>

    <div>
        <h3>Modification d'un article :  </h3>
        <form method="POST" action="" name="Update">
            <label for="exampleInputEmail1">Titre</label>
            <input name="title" type="text" id="exampleInputEmail1" required value="<?=$instrument['titre']?>"><br>
            <label for="exampleInputPassword1">Description</label>
            <textarea name="description" id="exampleInputPassword1" required><?=$instrument['description']?></textarea><br>

            <!-- Add other fields as necessary -->

            <input type="submit" value="Submit">
        </form>
        <form action="?update_instrument" method="post">
            <input type="hidden" name="instrumentID" value="<?php echo $instrument['instrumentID']; ?>">

            <label for="titre">Titre</label>
            <input type="text" id="titre" name="titre" value="<?php echo $instrument['titre']; ?>">
            
            <label for="description">Description</label>
            <textarea id="description" name="description"><?php echo $instrument['description']; ?></textarea>

            <label for="date_instrument">Date</label>
            <input type="date" id="date_instrument" name="date_instrument" value="<?php echo $instrument['date_instrument']; ?>">
            
            <label for="category_instrument_categoryID">Catégorie d'instrument</label>
            <input type="number" id="category_instrument_categoryID" name="category_instrument_categoryID" value="<?php echo $instrument['category_instrument_categoryID']; ?>">
            
            <!-- Pour chaque media lié à l'instrument, affichez une section pour modifier le media -->
            <?php foreach($instrument['media'] as $media): ?>
            <section>
                <label for="media_<?php echo $media['idmedias']; ?>">Média <?php echo $media['idmedias']; ?></label>
                <input type="text" id="media_<?php echo $media['idmedias']; ?>" name="media[<?php echo $media['idmedias']; ?>]" value="<?php echo $media['media_url']; ?>">
            </section>
            <?php endforeach; ?>
            
            <input type="submit" value="Mettre à jour l'instrument">
</form>
    </div>

    <?php include "../includes/privateFooter.php"; ?>

    <script>
        // Add a listener to all input fields
        document.querySelectorAll('input, textarea').forEach(input => {
            // On change, submit the form automatically
            input.addEventListener('change', () => {
                document.forms['Update'].submit();
            });
        });
    </script>

</body>
</html>
