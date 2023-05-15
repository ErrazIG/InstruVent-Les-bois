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
    
    <div class="body-content">
    <?php include_once '../includes/publicMenu.php';?>

    <h1 class="h2Fiche"><?php echo $instrument['titre']; ?></h1>

    <div class="contFicheImg">

        
        <p><?php echo $instrument['description']; ?></p>
    
        <img class="imgFiche1" src="<?php echo $image[0]['media_url']; ?>" alt=""> <!-- AJOUTER UNE IMAGE -->
    
    </div>

    <div class="line2"></div>
    
    <div>
        <h2 class="h3Fiche">Ecoutez :</h2>
        <div class="player">
          <img id="ficheImg" src="assets/blg.jpg" style="transform: rotate(0deg);" alt="">
  
            <span class="txtplayer">Artist - Titre</span>

        <audio src="assets/blg.mp3" class="audio"></audio>
        <div class="audio-btn" onclick="play()"></div>
    </div>

    


        <?php if (!empty($artist)): ?>
            <p class="pFicheInst">Cet instrument est joué par <?php echo $artist['nom']; ?> voici un lien vers sa <a href="<?php echo $artist['wiki_url']; ?>">Page Wikipédia</a> </p>
            <p class="pFicheInst">Voici un lien vers son <a href="<?php echo $artist['website_url']; ?>">Site web personnel</a></p>
        <?php endif; ?>
    </div>

    <div>
        <?php if (!empty($video['media_url']) || !empty($image['media_url'])): ?>
                <video width="320" height="240" controls>
                    <source src="<?php echo $video['media_url']; ?>" type="video/mp4">
                </video>
                <img width="320" height="240" src="<?php echo $image['media_url'];  ?>" alt="Image de l'instrument">
            <?php endif; ?>
    </div>

    <div class="contImg2">
        <img class="imgFicheInst2"   src="<?php echo $image[1]['media_url']; ?>" alt=""> 
        <img class="imgFicheInst2"src="<?php echo $image[2]['media_url']; ?>" alt=""> 
    </div>

    <?php include_once '../includes/publicFooter.php';?>
</div>      
<script src="js/script.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>