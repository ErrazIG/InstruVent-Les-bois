<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Accueil</title>
</head>
<body>
    
<div class="body-content">

    <?php include_once '../includes/publicMenu.php';?>
<div class="block-category">
    <div class="title-category">
        <h1><?php echo $recupcateg['cat_instrument'] ?></h1>
    </div>
    <div class="description-category">
        <p><?php echo $recupcateg['cat_description']; ?></p>
    </div>
    <div class="img-category">
        <?php if (!empty($recupcateg['cat_img'])): ?>
             <img class="img-by-categ" src="<?php echo $recupcateg['cat_img']; ?>" alt="Image de la catégorie">
        <?php endif; ?>
    </div>
</div>
    <?php if (!empty($instruments)): ?>
    <div class="grid-container">
    <?php foreach ($instruments as $instrument): ?>
        <div class="grid-item">
    <a href="index.php?p=ficheInstrument&instrumentID=<?php echo $instrument['instrumentID']; ?>">
        <?php echo htmlspecialchars($instrument['titre']); ?>
        <?php if (!empty($instrument['instrument_img'])): ?>
            <img src="<?php echo htmlspecialchars($instrument['instrument_img']); ?>" alt="Image de l'instrument">
        <?php endif; ?>
    </a>
</div>
    <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>Aucun instrument trouvé pour cette catégorie.</p>
<?php endif; ?>


    <?php include_once '../includes/publicFooter.php';?>
    </div>
<script src="js/script.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>