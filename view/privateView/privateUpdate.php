<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mettre à jour un article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include_once "../includes/privateMenu.php";?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">

                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1" style="margin-top:5vh">Mettre à jour un article</h1>
                </header>
        </div>
        <div class="col-lg-12">

        <form method="POST" action="" name="Insert">
            <input type="hidden" name="id" value="<?=$instru['instrumentID']?>" />
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">instrumentID</label>
                    <input name="instrumentID" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="<?=$instru['instrumentID']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">titre</label>
                    <input name="titre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="<?=$instru['titre']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">description</label>
                    <textarea name="description" type="text" class="form-control" id="exampleInputPassword1" required><?=$instru['description']?></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">category_instrument_categoryID</label>
                    <!-- type="datetime-local" -->
                    <input name="category_instrument_categoryID" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="<?=$instru['category_instrument_categoryID']?>">
                </div>


  <button type="submit" class="btn btn-primary">Update</button>
</form>
                
        </div>
    </div>
</div>

<?php include "../includes/privateFooter.php"; ?>