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
    <div class="home-content">
        <h1 class="home-title">Les instruments à vent: les bois</h1>
        <div class="flex-home">
            <img src="assets/francois-masson-3.png" alt="">
            <p>Les instruments à vent de la famille des bois sont une catégorie    fascinante d'instruments de musique qui produisent du son grâce à la   vibration de l'air à l'intérieur de tubes en bois. Ils comprennent une    large variété d'instruments, tels que la flûte traversière, le clarinette,     le saxophone, le hautbois, le basson et bien d'autres. Chaque instrument de     cette famille possède un caractère sonore unique, offrant une grande    diversité de timbres et d'expressions. Les musiciens qui jouent de ces     instruments utilisent leur souffle pour créer des mélodies et des harmonies     en contrôlant avec précision la pression de l'air et les doigtés sur les    différentes touches. Les instruments à vent de la famille des bois jouent  un rôle essentiel dans de nombreux styles musicaux, de la musique classique  à la jazz, en passant par les musiques traditionnelles du monde entier.  Leur son chaleureux et leur flexibilité en font des partenaires  indispensables dans l'orchestre, l'ensemble de musique de chambre ou en  solo, apportant une richesse et une profondeur exceptionnelles à la musique.</p>
        </div>
        <div class="line"></div>

        <div id="carouselExample" class="carousel slide container-img">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/image.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/image1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/image2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
    
    <?php include_once '../includes/publicFooter.php';?>
</div>    
<script src="js/script.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>