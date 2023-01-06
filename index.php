<?php
  // Récupère l'URL de la requête
  $url = $_SERVER['REQUEST_URI'];

  // Découpe l'URL en segments
  $segments = explode('/', $url);

  // Détermine le segment de l'action (la deuxième partie de l'URL)
  $action = $segments[2];

  // Affiche la page d'accueil si aucune action n'est spécifiée
  if (empty($action)) {
    include 'home.php';
  }
  // Affiche la page de contact si l'action est "contact"
  else if ($action == 'cv.php') {
    include 'cv.php';
  }
  // Affiche la page de contact si l'action est "contact"
  else if ($action == 'index.php') {
    include 'index.php';
  }
  // Affiche la page de contact si l'action est "contact"
  else if ($action == 'others.php') {
    include 'others.php';
  }
  // Affiche la page d'erreur 404 si l'action est inconnue
  else {
    header('HTTP/1.0 404 Not Found');
    include '404.php';
  }
?>
