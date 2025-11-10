  <style>
    .footer-logo {
      height: 32px;
      width: auto;
      object-fit: contain;
    }
  </style>
  <footer>
    <div class="footer-inner">
      <div class="footer-top">
        <div class="footer-brand">
          <a href="<?= url('forside') ?>" class="brand">
            <?php if (hasLogo()): ?>
              <img src="<?= $logo['logo_white'] ?>" alt="<?= $logo['alt_text'] ?>" class="footer-logo" />
            <?php else: ?>
              <?= $logo['organization_name'] ?>
            <?php endif; ?>
          </a>
          <div style="color:var(--text-dim); font-size:.8rem; line-height:1.4; max-width:20rem; margin-top:1rem;">
            Mindre administration. Mere fællesskab. edovo hjælper foreninger med overblik, tryghed og dokumentation.
          </div>
        </div>

        <div>
          <div class="footer-col-title">Sider</div>
          <div class="footer-links">
            <?php foreach($navigation as $page => $title): ?>
              <a href="<?= url($page) ?>"><?= $title ?></a>
            <?php endforeach; ?>
            <a href="<?= url('login') ?>">Login</a>
          </div>
        </div>

        <div>
          <div class="footer-col-title">Juridisk</div>
          <div class="footer-links">
            <a href="/privatlivspolitik">Privatlivspolitik</a>
            <a href="/vilkaar">Vilkår</a>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        © 2025 edovo – Alle rettigheder forbeholdes.
      </div>
    </div>
  </footer>

  <script>
    const burgerBtn = document.getElementById('burgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    if (burgerBtn && mobileMenu) {
      burgerBtn.addEventListener('click', () => {
        const isOpen = mobileMenu.style.display === 'block';
        mobileMenu.style.display = isOpen ? 'none' : 'block';
      });
    }
  </script>
</body>
</html>