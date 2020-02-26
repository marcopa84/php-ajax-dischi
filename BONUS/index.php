<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../dist/app_bonus.css">
  <title>Spotify - Catalog</title>
</head>
<body>
  <header>
    <div class="wrapper">
      <img src="../partials/img/logo.png" alt="">
      <select class="author" name="author">
        <option value="">Seleziona l'autore</option>
      </select>
    </div>
  </header>

  <main>
    <div class="wrapper">

    </div>
  </main>

  <footer>

  </footer>

  <script id="template_input" type="text/x-handlebars-template">
    <option value="{{{value}}}">{{{value}}}</option>
  </script>

  <script id="template" type="text/x-handlebars-template">
    <div class="cd">
      <img src="{{img_path}}" alt="">
      <h2>{{cd_title}}</h2>
      <h3>{{cd_author}}</h3>
      <small>{{cd_year}}</small>
    </div>
  </script>
  <script src="../dist/app_bonus.js" charset="utf-8"></script>
</body>
</html>
