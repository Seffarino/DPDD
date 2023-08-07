<?php
session_start();
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
  "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "./controller/artistes.controller.php";
require_once "./controller/admin.controller.php";
require_once "./controller/contacts.controller.php";
require_once "./controller/mise_en_page.controller.php";
require_once "./controller/partenaires.controller.php";
require_once "./controller/carrousel.controller.php";
require_once "./controller/billetterie.controller.php";


$adminController = new AdminController();
$artistesController = new ArtistesController();
$contactsController = new ContactsController();
$mise_en_pageController = new MepController();
$partenairesController = new PartenairesController();
$carrouselController = new CarrouselController();
$billetterieController = new BilletterieController();

/* ROUTEUR */
try {
  /* Si l'url est vide */
  if (empty($_GET['page'])) {
    $adminController->get_page_festival();
  } else {
    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
    if ($url[0] !== "back") throw new Exception("La page n'existe pas");
    /* Premiere partie de l'url */
    switch ($url[1]) {
      case 'login':
        $adminController->get_page_login();
        break;
      case 'connexion':
        $adminController->connexion();
        break;
      case 'admin':
        $adminController->get_page_admin();
        break;
      case 'deconnexion':
        $adminController->deconnexion();
        break;
      case 'artistes':
        switch ($url[2]) {
          case 'visualisation':
            $artistesController->visualisation();
            break;
          case 'validationSuppression':
            $artistesController->suppression();
            break;
          case 'creation':
            $artistesController->get_creation();
            break;
          case 'creationValidation':
            $artistesController->creationValidation();
            break;
          case 'modification':
            $artistesController->getModification();
            break;
          case 'modificationValidation':
            $artistesController->getModificationValidation();
            break;

          default:
            throw new Exception("La page n'existe pas");
            break;
        }
        break;
      case 'contacts':
        switch ($url[2]) {
          case 'visualisation':
            $contactsController->visualisation();
            break;
          case 'validationSuppression':
            $contactsController->suppression();
            break;
          case 'creation':
            $contactsController->get_creation();
            break;
          case 'haut':
            $contactsController->haut();
            break;
          case 'bas':
            $contactsController->bas();
            break;
          case 'creationValidation':
            $contactsController->creationValidation();
            break;
          default:
            throw new Exception("La page n'existe pas");
            break;
        }
        break;
      case 'mise_en_page':
        switch ($url[2]) {
          case 'visualisation':
            $mise_en_pageController->visualisation();
            break;
          case 'validationModification':
            $mise_en_pageController->modification();
            break;
          default:
            throw new Exception("La page n'existe pas");
            break;
        }
        break;
      case 'partenaires':
        switch ($url[2]) {
          case 'visualisation':
            $partenairesController->visualisation();
            break;
          case 'validationSuppression':
            $partenairesController->suppression();
            break;
          case 'categorieCreation':
            $partenairesController->get_categorie_creation();
            break;
          case 'categorieValidation':
            $partenairesController->categorieValidation();
            break;
          case 'categorieVisualisation':
            $partenairesController->categorieVisualisation();
            break;
          case 'categorieSuppression':
            $partenairesController->categorieSuppression();
            break;
          case 'creation':
            $partenairesController->get_creation();
            break;
          case 'creationValidation':
            $partenairesController->creationValidation();
            break;
          case 'categorieHaut':
            $partenairesController->categorieHaut();
            break;
          case 'categorieBas':
            $partenairesController->categorieBas();
            break;
          case 'bas':
            $partenairesController->bas();
            break;
          case 'haut':
            $partenairesController->haut();
            break;
          default:
            throw new Exception("La page n'existe pas");
            break;
        }
        break;
      case 'carrousel':
        switch ($url[2]) {
          case 'visualisation':
            $carrouselController->visualisation();
            break;
          case 'validationSuppression':
            $carrouselController->suppression();
            break;
          case 'creation':
            $carrouselController->get_creation();
            break;
          case 'creationValidation':
            $carrouselController->creationValidation();
            break;
          default:
            throw new Exception("La page n'existe pas");
            break;
        }
        break;
      case 'billetterie':
        switch ($url[2]) {
          case 'visualisation':
            $billetterieController->visualisation();
            break;
          case 'validationSuppression':
            $billetterieController->suppression();
            break;
          case 'creation':
            $billetterieController->get_creation();
            break;
          case 'creationValidation':
            $billetterieController->creationValidation();
            break;
          case 'modification':
            $billetterieController->getModification();
            break;
          case 'modificationValidation':
            $billetterieController->modificationValidation();
            break;
          default:
            throw new Exception("La page n'existe pas");
            break;
        }
        break;
      default:
        throw new Exception("La page n'existe pas");
        echo $url;
        break;
    }
  }
} catch (Exception $e) {
  $msg = $e->getMessage();
  echo $msg;
  echo "<a href='" . URL . "back/login'>login</a>";
}
