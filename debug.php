<?php
// Debug information
echo "<h1>Debug Information</h1>";
echo "<pre>";
echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "\n";
echo "PATH_INFO: " . ($_SERVER['PATH_INFO'] ?? 'not set') . "\n";
echo "SCRIPT_NAME: " . $_SERVER['SCRIPT_NAME'] . "\n";
echo "PHP_SELF: " . $_SERVER['PHP_SELF'] . "\n";
echo "\n";

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo "Parsed path: " . $path . "\n";
echo "Trimmed path: " . trim($path, '/') . "\n";
echo "\n";

echo "GET parameters:\n";
print_r($_GET);
echo "\n";

echo "Does .htaccess work? ";
echo (isset($_SERVER['REDIRECT_URL']) ? 'YES' : 'NO (might be normal)') . "\n";
echo "</pre>";

// Test file_exists
echo "<h2>Page Files Check</h2>";
echo "<pre>";
$pages_dir = __DIR__ . '/pages/';
echo "Pages directory: " . $pages_dir . "\n\n";
$files = ['home.php', 'how.php', 'features.php', 'about.php', 'contact.php', 'pricing.php', 'login.php', 'signup.php', '404.php'];
foreach ($files as $file) {
    $exists = file_exists($pages_dir . $file);
    echo $file . ": " . ($exists ? 'EXISTS' : 'MISSING') . "\n";
}
echo "</pre>";
?>