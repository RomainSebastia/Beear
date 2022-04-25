<header>
  <div id="logmenu" class="containermobile">
    <!-- quand connecté, afficher juste le lien Accéder au Dashboard-->
    <?php if (isset($_SESSION['user'])): ?>
      <a href="<?= $this->viewAdmin('dashboard') ?>" class="button">Accéder au Dashboard</a>
    <?php else: ?>
      <a href="/?action=register">Se créer un compte</a>
      <a href="/?action=login" id="buttonlogmenu" class="button">Se connecter</a>
    <?php endif; ?>
  </div>
  <div id="generalheader">
    <nav id="menuburger" role="navigation">
      <div id="menuToggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
          <a href="/">
            <li>Accueil</li>
          </a>
          <a href="/#bblonde">
            <li>Produits</li>
          </a>
          <a href="/?action=valeurs">
            <li>Valeurs</li>
          </a>
          <a href="/?action=actualites">
            <li>Actualités</li>
          </a>
          <a href="/?action=contact">
            <li>Contact</li>
          </a>
          <div id="corporation">
            <a href="/"><img src="./public/frontend/img/Logotxt-Beear.png" alt="logo texte beear"></a>
            <address>Lanvaux<br><strong>56220 SAINT-GRAVÉ</strong></address>
          </div>
        </ul>
      </div>
    </nav>
    <div id="entete">
      <figure id="logo">
        <a href="/"><img src="./public/frontend/img/Logo-Beear.png" alt="logo beear"></a>
      </figure>
      <nav id="menudesktop">
        <ul id="menunav">
          <a href="/">
            <li>Accueil</li>
          </a>
          <a href="/#bblonde">
            <li>Produits</li>
          </a>
          <a href="/?action=valeurs">
            <li>Valeurs</li>
          </a>
          <a href="/?action=actualites">
            <li>Actualités</li>
          </a>
          <a href="/?action=contact">
            <li>Contact</li>
          </a>
        </ul>
      </nav>
    </div>
    <div id="flexcenterendheader">
      <div id="endheader" class="container">
        <h1>Et si vous découvriez nos bières ?</h1>
        <a href="/#articles" class="flex-button">
          <p class="button">Je découvre</p>
        </a>
      </div>
    </div>
  </div>
</header>