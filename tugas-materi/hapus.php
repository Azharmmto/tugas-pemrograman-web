<?php 

  require "functions.php";

  $id = $_GET["id"];

  hapus($id) > 0 ? $hapusBerhasil = true : $hapusBerhasil = false;

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hapus Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <?php if(isset($hapusBerhasil)) : ?>

      <div class="alert alert-success text-center mx-auto mt-5" role="alert" style="width: 400px; ">
         <h1 class="fs-3">Data BERHASIL di hapus!</h1>

         <div class="text-end">
            <a href="index.php">
              <div class="btn btn-info">OK</div>
            </a>
         </div>
      </div>

    <?php endif ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>