<nav class="navbar" role="navigation" aria-label="main navigation">

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">


      <a href="<?= URL ?>back/admin" class="navbar-item">
        Accueil
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Artistes
        </a>

        <div class="navbar-dropdown">
          <a href="<?= URL ?>back/artistes/visualisation" class="navbar-item">
            Visualisation
          </a>
          <a href="<?= URL ?>back/artistes/creation" class="navbar-item">
            Creation
          </a>

        </div>


      </div>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Contact
        </a>

        <div class="navbar-dropdown">
          <a href="<?= URL ?>back/contacts/visualisation" class="navbar-item">
            Visualisation
          </a>
          <a href="<?= URL ?>back/contacts/creation" class="navbar-item">
            Creation
          </a>

        </div>


      </div>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Partenaires
        </a>

        <div class="navbar-dropdown">
          <a href="<?= URL ?>back/partenaires/visualisation" class="navbar-item">
            Visualisation
          </a>
          <a href="<?= URL ?>back/partenaires/creation" class="navbar-item">
            Creation
          </a>
          <a href="<?= URL ?>back/partenaires/categorieVisualisation" class="navbar-item">
            Les catégories
          </a>
          <a href="<?= URL ?>back/partenaires/categorieCreation" class="navbar-item">
            Creation de catégorie
          </a>
        </div>
      </div>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Billetterie
        </a>

        <div class="navbar-dropdown">
          <a href="<?= URL ?>back/billetterie/visualisation" class="navbar-item">
            Visualisation
          </a>
          <a href="<?= URL ?>back/billetterie/creation" class="navbar-item">
            Creation
          </a>
        </div>
      </div>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Carrousel
        </a>

        <div class="navbar-dropdown">
          <a href="<?= URL ?>back/carrousel/visualisation" class="navbar-item">
            Visualisation
          </a>
          <a href="<?= URL ?>back/carrousel/creation" class="navbar-item">
            Creation
          </a>

        </div>


      </div>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Mise en page
        </a>

        <div class="navbar-dropdown">
          <a href="<?= URL ?>back/mise_en_page/visualisation" class="navbar-item">
            Visualisation
          </a>
        </div>


      </div>
      <a href="<?= URL ?>back/deconnexion" class="navbar-item has-text-danger">
        Deconnexion
      </a>
    </div>


  </div>
</nav>