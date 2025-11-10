  <header>
    <div class="container nav">
      <div class="nav-left">
        <a href="<?= url('forside') ?>" class="brand">
          <?php if (hasLogo()): ?>
            <img src="<?= $logo['logo_white'] ?>" alt="<?= $logo['alt_text'] ?>" />
          <?php else: ?>
            <?= $logo['organization_name'] ?>
          <?php endif; ?>
        </a>
      </div>

      <nav class="nav-center">
        <?php foreach($navigation as $page => $title): ?>
          <a href="<?= url($page) ?>"><?= $title ?></a>
        <?php endforeach; ?>
      </nav>

      <div class="nav-right">
        <a href="<?= url('login') ?>" class="login-btn">Login</a>
        <a href="<?= url('signup') ?>" class="cta-btn">Prøv gratis</a>
      </div>

      <button class="burger" id="burgerBtn" aria-label="Menu">
        <span class="burger-line"></span>
        <span class="burger-line"></span>
        <span class="burger-line"></span>
      </button>
    </div>

    <div class="mobile-menu" id="mobileMenu">
      <div class="mobile-menu-inner">
        <?php foreach($navigation as $page => $title): ?>
          <a href="<?= url($page) ?>"><?= $title ?></a>
        <?php endforeach; ?>
        <div class="mobile-auth">
          <a href="<?= url('login') ?>" class="login-btn" style="text-align:center;">Login</a>
          <a href="<?= url('signup') ?>" class="cta-btn" style="text-align:center;">Prøv gratis</a>
        </div>
      </div>
    </div>
  </header>