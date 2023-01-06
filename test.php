<?php
  // Récupère l'URL de la requête
  $url = $_SERVER['REQUEST_URI'];

  // Découpe l'URL en segments
  $segments = explode('/', $url);

  // Détermine le segment de l'action (la deuxième partie de l'URL)
  $action = $segments[1];

  var_dump($url);
  var_dump($segments);
  var_dump($action);
