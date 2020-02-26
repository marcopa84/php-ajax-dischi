<?php
  include __DIR__."/../partials/server.php";

  header('Content-Type: application/json');
  echo json_encode($database);
