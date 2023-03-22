<?php
// Ce fichier de routes est propre à chaque application. Il est donc à compléter par chaque utilisateur du framework, en fonction de l'arborescence et des fonctionnalités de son projet.
// tableau associatif où chaque clé = nom d'une route
const ROUTES = [
  'home' => [
    'controller' => App\Controller\MainController::class, // le nom de classe de contrôleur à instancier ( et namespace)
    'method' => 'home' // méthode à appeler depuis l'objet ainsi créé
  ],
];