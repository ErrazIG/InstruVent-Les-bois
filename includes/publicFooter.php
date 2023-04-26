    <!-- Footer  -->
    <div class="container-footer">
      <div class="footer-menu">
        <p> <strong>MENU</strong></p>
        <a href="" class="navnavnav">Accueil</a>
        <a href="" class="navnavnav">A propos</a>
        <a href="" class="navnavnav">Instrument</a>
        <a href="" class="navnavnav">Contact</a>
      </div>
      <div class="footer-categ">
        <p> <strong>CATEGORIES</strong></p>
        <?php
        foreach ($menu as $item):
          ?>

        <a href="?p=Category&categoryID=<?=$item["categoryID"]?>" class="navnavnav"><?=$item["cat_instrument"]?></a>

        <?php 
        endforeach;
        ?>
      </div>
      <div class="footer-social">
        <p> <strong>RESEAUX</strong></p>
        <br>
        <a href="">
          <img src="assets/5365678_fb_facebook_facebook logo_icon.png" alt="">
        </a>
        <a href="">
          <img src="assets/5296514_bird_tweet_twitter_twitter logo_icon.png" alt="">
        </a>
        <a href="">
          <img src="assets/1298747_instagram_brand_logo_social media_icon.png" alt="">
        </a>

      </div>
      <div class="footer-admin">
        <p> <strong>ADMIN</strong></p>
        <br>
        <a href="#">
          <button type="button" class="btn btn-warning btn-admin" data-bs-toggle="modal" data-bs-target=".exampleModal">Admin</button>
        </a>
        <br>
        <br>
        <p>&copyCF2M</p>
    <!--
        <p>@Billy</p>
        <p>@Fred</p>
        <p>@Maksym</p>
        <p>@Youssef</p>
    -->
        <a href="" class="text-white navnavnav">Mentions légales</a>

      </div>
    </div>