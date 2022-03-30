<?php

namespace Project\Controllers;

class FrontController {
  function home(): void {
    require 'app/Views/frontend/home.php';
  }
  
  function valeursPage(): void {
    require 'app/Views/frontend/valeurs.php';
  }

  function actualitesPage(): void {
    require 'app/Views/frontend/actualites.php';
  }
  
  function contactPage(): void {
    require 'app/Views/frontend/contact/contact.php';
  }
}