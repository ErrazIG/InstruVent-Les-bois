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
    <?php include_once '../includes/publicMenu.php';?>

    
    <div class="content">
    
    <h1 class="title-contact text-center">Contact</h1>
    
    <div class="container-contact">
      <form>
        <div class="mb-4 col-auto">
          <label for="exampleInputName1" class="form-label">Nom</label>
          <input type="text" class="form-control" id="exampleInputName1" size="40" placeholder="Entrez votre nom">
        </div>
        <div class="mb-4 sm-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"size="40" placeholder="Entrez votre Email">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-4 sm-3">
          <label for="exampleFormControlTextarea1" class="form-label">Message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Entrez votre Message"></textarea>
        </div>
        <div class="mb-0 sm-3 contact-submit">
        <button type="button" class=" btn text-white contact-btn mt-5 ">Envoyer</button>
        </div>
      </form>
    
    </div>
    <?php
    if (isset($envoi)):
        ?>
        <?= $sended ?>
    <?php 
    endif;
    ?> 
    </div>
    
    <?php include_once '../includes/publicFooter.php';?>
    
<script src="js/script.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
