<?php
  include __DIR__."/../partials/server.php";

  $author = $_GET['author'];

  if (empty($author)) {

    header('Content-Type: application/json');
    echo json_encode($database);

  }else{

    $database_filtred = [];
    foreach ($database as $cd) {
      if ($cd['author'] == $author) {
        $database_filtred = [$cd];
      }
    }
    if (empty($database_filtred)) {
      $database_filtred = [
        [
          'title' => 'Nessun titolo',
          'author' => 'nessun autore',
          'year' => 'anno non disponibile',
          'poster' => 'https://www.associazionejam.it/wp-content/uploads/2017/04/non-disponibile-300x300.png'
        ]
      ];
    }

    header('Content-Type: application/json');
    echo json_encode($database_filtred);
  }
