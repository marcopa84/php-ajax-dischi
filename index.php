<?php
  include __DIR__."/partials/server.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/app.css">
  <title>Spotify - Catalog</title>
</head>
<body>
  <header>
    <div class="wrapper">
      <img src="partials/img/logo.png" alt="">
    </div>
  </header>

  <main>
    <div class="wrapper">
      <!-- <div class="cd">
        <img src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg" alt="">
        <h2>Title</h2>
        <h3>Artista</h3>
        <small>anno</small>
      </div> -->

      <?php foreach ($database as $key => $cd) { ?>
        <div class="cd">
          <img src="<?php echo $cd['poster'] ?>" alt="">
          <h2><?php echo $cd['title'] ?></h2>
          <h3><?php echo $cd['author'] ?></h3>
          <small><?php echo $cd['year'] ?></small>
        </div>
      <?php } ?>


    </div>
  </main>

  <footer>

  </footer>

</body>
</html>
