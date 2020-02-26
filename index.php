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

    </div>
  </main>

  <footer>

  </footer>
  <script id="template" type="text/x-handlebars-template">
    <div class="cd">
      <img src="{{img_path}}" alt="">
      <h2>{{cd_title}}</h2>
      <h3>{{cd_author}}</h3>
      <small>{{cd_year}}</small>
    </div>
  </script>
  <script src="dist/app.js" charset="utf-8"></script>
</body>
</html>
