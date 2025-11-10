<!DOCTYPE html>
<html lang="da">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $page_title ?></title>
  <meta name="description" content="<?= $pages[$current_page]['description'] ?? $site['description'] ?>" />
  <style>
    :root {
      --bg-deep: #102855;
      --bg-light: #e9eef7;
      --bg-card: #1b3773;
      --text-primary: #ffffff;
      --text-dark: #0a1838;
      --text-dim: #c7d3ee;
      --accent: #3b82f6;
      --border-color: rgba(255,255,255,0.1);
      --radius-lg: 1rem;
      --radius-sm: .5rem;
      --max-width: 1280px;
    }

    * {
      box-sizing: border-box;
      -webkit-font-smoothing: antialiased;
    }

    body {
      margin: 0;
      background-color: var(--bg-light);
      color: var(--text-dark);
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Inter', sans-serif;
      line-height: 1.5;
    }

    .container {
      max-width: var(--max-width);
      margin: auto;
      padding: 0 1.5rem;
      width: 100%;
    }

    /* HEADER / NAV */
    header {
      background-color: var(--bg-deep);
      color: var(--text-primary);
      padding: 1rem 0;
      border-bottom: 1px solid rgba(255,255,255,0.07);
      position: relative;
      z-index: 20;
    }

    .nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 1rem;
    }

    .nav-left {
      display: flex;
      align-items: center;
      gap: .75rem;
      min-width: 0;
    }

    .brand {
      display: flex;
      align-items: center;
      color: #fff;
      text-decoration: none;
      font-weight: 600;
      font-size: 1.1rem;
      line-height: 1;
      letter-spacing: -0.03em;
    }

    .brand img {
      height: 40px;
      width: auto;
      object-fit: contain;
      background: transparent;
      border: none;
      filter: brightness(1);
    }

    /* Text fallback styling when no logo */
    .brand:not(:has(img)) {
      padding: 0.5rem 0;
    }

    /* Responsiv logo størrelse */
    @media (max-width: 767px) {
      .brand img {
        height: 32px;
      }
      
      .brand {
        font-size: 1rem;
      }
    }

    .brand-mark {
      background: var(--accent);
      color: white;
      border-radius: .4rem;
      padding: .3rem .5rem;
      margin-right: .4rem;
      font-size: .8rem;
      font-weight: 600;
      line-height: 1;
    }

    /* desktop menu */
    .nav-center {
      display: flex;
      align-items: center;
      gap: 2rem;
      font-size: .9rem;
      font-weight: 500;
    }

    .nav-center a {
      color: var(--text-primary);
      text-decoration: none;
      line-height: 1.2;
    }

    /* right side */
    .nav-right {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .login-btn {
      background: transparent;
      color: #fff;
      border: 1px solid rgba(255,255,255,0.3);
      text-decoration: none;
      font-size: .9rem;
      font-weight: 500;
      padding: .6rem .8rem;
      border-radius: .5rem;
      line-height: 1.2;
    }

    .cta-btn {
      background: var(--accent);
      color: white;
      padding: .7rem 1rem;
      border-radius: .5rem;
      text-decoration: none;
      font-weight: 600;
      font-size: .9rem;
      line-height: 1.2;
      border: 0;
    }

    /* burger */
    .burger {
      display: none;
      flex-direction: column;
      justify-content: center;
      gap: .3rem;
      padding: .6rem .7rem;
      border-radius: .5rem;
      border: 1px solid rgba(255,255,255,0.3);
      background: transparent;
      cursor: pointer;
    }

    .burger-line {
      width: 20px;
      height: 2px;
      background: #fff;
      border-radius: 2px;
    }

    /* mobile dropdown */
    .mobile-menu {
      position: absolute;
      left: 0;
      right: 0;
      top: 100%;
      background-color: var(--bg-deep);
      border-top: 1px solid rgba(255,255,255,0.07);
      border-bottom: 1px solid rgba(255,255,255,0.07);
      display: none;
    }

    .mobile-menu-inner {
      display: grid;
      gap: 1rem;
      padding: 1.5rem;
      font-size: 1rem;
      font-weight: 500;
    }

    .mobile-menu-inner a {
      color: var(--text-primary);
      text-decoration: none;
    }

    .mobile-auth {
      display: flex;
      flex-direction: column;
      gap: .75rem;
      margin-top: .5rem;
    }

    /* FEATURES */
    .features {
      background: white;
      padding: 5rem 0;
    }

    .features h2 {
      text-align: center;
      font-size: 2rem;
      color: var(--bg-deep);
      margin-bottom: 3rem;
      font-weight: 600;
      letter-spacing: -0.04em;
    }

    .feature-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
    }

    .feature-card {
      background: var(--bg-light);
      border: 1px solid #dce4f5;
      border-radius: 1rem;
      padding: 1.8rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.04);
    }

    .feature-card h3 {
      margin-top: 0;
      color: var(--accent);
      font-size: 1.2rem;
      font-weight: 600;
      letter-spacing: -0.03em;
    }

    .feature-card p {
      color: var(--text-dark);
      font-size: .95rem;
      line-height: 1.5;
    }

    /* FOOTER */
    footer {
      background-color: var(--bg-deep);
      color: var(--text-dim);
      padding: 3rem 0 2rem 0;
      font-size: .9rem;
      border-top: 1px solid rgba(255,255,255,0.07);
    }

    .footer-inner {
      max-width: var(--max-width);
      margin: 0 auto;
      padding: 0 1.5rem;
      display: grid;
      gap: 2rem;
    }

    .footer-top {
      display: grid;
      gap: 2rem;
    }

    .footer-brand {
      color: var(--text-primary);
    }

    .footer-brand .brand {
      color: #fff;
      font-size: 1rem;
    }

    .footer-brand .brand img {
      height: 40px;
      width: auto;
      filter: brightness(1);
    }

    .footer-col-title {
      color: var(--text-primary);
      font-weight: 600;
      font-size: .8rem;
      letter-spacing: -0.03em;
      margin-bottom: .75rem;
    }

    .footer-links {
      display: grid;
      gap: .5rem;
      font-size: .8rem;
      line-height: 1.4;
    }

    .footer-links a {
      color: var(--text-dim);
      text-decoration: none;
      font-weight: 400;
    }

    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.07);
      margin-top: 2rem;
      padding-top: 1.5rem;
      text-align: center;
      font-size: .75rem;
      color: var(--text-dim);
    }

    /* RESPONSIVE */
    @media (min-width: 768px) {
      .footer-top {
        grid-template-columns: 2fr 1fr 1fr;
      }

      .burger {
        display: none;
      }

      .mobile-menu {
        display: none !important;
      }
    }

    @media (max-width: 767px) {
      .nav-center {
        display: none;
      }

      .nav-right {
        display: none;
      }

      .burger {
        display: flex;
      }
    }
  </style>
</head>
<body>