<?php
// Include configuration
require_once 'config.php';

// Toggle logo for testing
if (isset($_GET['logo'])) {
    $logo['use_logo'] = $_GET['logo'] === '1';
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo Test - edovo</title>
    <style>
        body { font-family: system-ui; padding: 2rem; background: #f5f5f5; }
        .test-section { 
            background: white; 
            margin: 2rem 0; 
            padding: 2rem; 
            border-radius: 8px; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .nav-demo { 
            background: #102855; 
            color: white; 
            padding: 1rem 2rem; 
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 2rem;
        }
        .brand { 
            display: flex; 
            align-items: center; 
            color: white; 
            text-decoration: none; 
            font-weight: 600; 
            font-size: 1.1rem;
        }
        .brand img { 
            height: 40px; 
            width: auto; 
            object-fit: contain; 
        }
        .footer-demo { 
            background: #102855; 
            color: white; 
            padding: 2rem; 
            border-radius: 8px;
        }
        .controls { 
            margin-bottom: 2rem; 
            text-align: center;
        }
        .controls a { 
            display: inline-block; 
            margin: 0 1rem; 
            padding: 0.5rem 1rem; 
            background: #3b82f6; 
            color: white; 
            text-decoration: none; 
            border-radius: 4px;
        }
    </style>
</head>
<body>

<h1>Logo Test</h1>

<div class="controls">
    <a href="?logo=1">Vis med logo</a>
    <a href="?logo=0">Vis kun tekst</a>
</div>

<div class="test-section">
    <h2>Navigation Demo</h2>
    <div class="nav-demo">
        <a href="/" class="brand">
            <?php if (hasLogo()): ?>
                <img src="<?= $logo['logo_white'] ?>" alt="<?= $logo['alt_text'] ?>" />
            <?php else: ?>
                <?= $logo['organization_name'] ?>
            <?php endif; ?>
        </a>
        <div>Features</div>
        <div>Priser</div>
        <div>Kontakt</div>
    </div>
</div>

<div class="test-section">
    <h2>Footer Demo</h2>
    <div class="footer-demo">
        <a href="/" class="brand">
            <?php if (hasLogo()): ?>
                <img src="<?= $logo['logo_white'] ?>" alt="<?= $logo['alt_text'] ?>" style="height: 32px;" />
            <?php else: ?>
                <?= $logo['organization_name'] ?>
            <?php endif; ?>
        </a>
        <p style="margin-top: 1rem; opacity: 0.8;">edovo hjælper foreninger med administration</p>
    </div>
</div>

<div class="test-section">
    <h2>Logo Konfiguration</h2>
    <p><strong>use_logo:</strong> <?= $logo['use_logo'] ? 'true' : 'false' ?></p>
    <p><strong>logo_white:</strong> <?= $logo['logo_white'] ?></p>
    <p><strong>Logo eksisterer:</strong> <?= file_exists(__DIR__ . $logo['logo_white']) ? 'ja' : 'nej' ?></p>
    <p><strong>hasLogo() resultat:</strong> <?= hasLogo() ? 'true' : 'false' ?></p>
    <p><strong>Fallback navn:</strong> <?= $logo['organization_name'] ?></p>
</div>

</body>
</html>