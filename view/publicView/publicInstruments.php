<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Instruments</title>
</head>
<body>
    <div class="body-content">


        <?php include_once '../includes/publicMenu.php';?>

        <div class="content-instruments">
            
        <h1 class="title-instrument text-center">Instruments</h1>


            <div class="container-test">
                

                <p class="text-instru">Les bois sont une famille d'instruments de musique à vent qui se caractérisent par leur système d'émission du son constitué soit par un biseau comme les flûtes, soit par la vibration d'une anche simple comme la clarinette ou double comme le hautbois.

                Si certains sont en métal comme les saxophones, en cristal comme quelques flûtes traversières, en ivoire comme des hautbois baroques, en céramique comme l'ocarina ou en plastique comme une partie des flûtes à bec, la grande majorité, encore de nos jours, est fabriquée avec toutes sortes d'essences de bois, d'où le nom de la famille.

                Peu importe donc la matière dans laquelle ils sont fabriqués, pour appartenir à la famille des bois, les instruments doivent avoir, soit un biseau, soit une anche (une lamelle qui vibre pour produire le son).
                Le plus souvent, la partie transformant le son est faite d'un tuyau cylindrique (flûte traversière ou clarinette) ou conique (saxophone ou hautbois), généralement percé de trous bouchés par les doigts ou un mécanisme qui peut être complexe.

                </p>

                <img class="img-instru" src="assets/introInstru.jpg" alt="">


            </div>
        </div>

        <a href=""><button type="button" class="btn text-white contact-btn">En savoir plus</button></a>

        <div class="line"></div>

        <h1 class="title-categ text-center">Catégories</h1>

        <div class="categ-instru" >
            <?php
            foreach ($menu as $item):
              ?>
            <a href="?p=Category&categoryID=<?=$item["categoryID"]?>" class="categ-liens">
                <?php if (!empty($item['cat_img'])): ?>
                 <img class="img-categ" src="<?php echo $item['cat_img'];?>" alt="Image de la catégorie">
                
                <span class="title-img-categ"><?=$item["cat_instrument"]?></span>
                <?php endif; ?>
                
            </a>
            

            <?php 
            endforeach;
            ?>
        </div>
  
        

        <?php include_once '../includes/publicFooter.php';?>
    </div>
<script src="js/script.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>