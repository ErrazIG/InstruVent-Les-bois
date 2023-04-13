<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Instruments</title>
</head>
<body>

    <nav id="topNavBar" class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">Accueil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon icon-menu"></span>
          </button>
          <div class="collapse navbar-collapse menu" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" href="#">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Instruments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Admin</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="content">

        <h1 class="title-contact text-center">Contact</h1>

        <div class="container-contact">
          <form>
            <div class="mb-4 col-auto">
              <label for="exampleInputName1" class="form-label">Nom</label>
              <input type="text" class="form-control" id="exampleInputName1" size="40">
              <div id="emailHelp" class="form-text">Entrez un nom ou un pseudo.</div>
            </div>
            <div class="mb-4 sm-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"size="40">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-4 sm-3">
              <label for="exampleFormControlTextarea1" class="form-label">Message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
            <div class="mb-4 sm-3 contact-submit">
            <button type="submit" class=" btn text-white contact-btn ">Envoyer</button>
            </div>
          </form>

        </div>
        <?php
        if (isset($envoi)):
            ?>
            <?= $envoi ?>
        <?php 
        endif;
        ?> 
    </div>

    <div class="container-footer">
      <div class="footer-menu">
        <a href="">A propos</a>
        <a href="">Instrument</a>
        <a href="">Contact</a>
        <a href="">Admin</a>
      </div>
      <div class="footer-categ">
        <a href="">Biseaux</a>
        <a href="">Anches libre</a>
        <a href="">Anches simple</a>
        <a href="">Anches double</a>
      </div>
      <div class="footer-social">
        <img src="../../public/assets/5365678_fb_facebook_facebook logo_icon.png" alt="">
        <img src="../../public/assets/5296514_bird_tweet_twitter_twitter logo_icon.png" alt="">
        <img src="../../public/assets/1298747_instagram_brand_logo_social media_icon.png" alt="">
      </div>
    </div>
    
<script src="js/script.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>