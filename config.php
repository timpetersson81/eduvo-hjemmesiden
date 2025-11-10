<?php
// Site configuration
$site = [
    'title' => 'edovo – Foreningsadministration gjort nemt',
    'description' => 'edovo samler medlemsadministration, bestyrelsesarbejde og kommunikation ét sted.',
    'base_url' => ''
];

// Logo configuration
$logo = [
    'use_logo' => true,  // Set to false to use text instead
    'logo_white' => '/assets/logo_hvid.svg',  // Logo for dark backgrounds (navigation)
    'logo_color' => '/assets/logo_farver.svg', // Logo for light backgrounds
    'logo_png' => '/assets/images/Eduvo_logo_white.png', // Fallback PNG version
    'alt_text' => 'edovo logo',
    'organization_name' => 'edovo.dk' // Fallback text when no logo
];

// Check if logo files actually exist
function hasLogo() {
    global $logo;
    if (!$logo['use_logo']) return false;
    
    $logo_path = __DIR__ . $logo['logo_white'];
    return file_exists($logo_path);
}

// URL helper function
function url($page) {
    $url_mapping = [
        'forside' => '/',
        'features' => '/funktioner',
        'pricing' => '/priser',
        'how' => '/saadan-virker-det',
        'about' => '/om-os',
        'contact' => '/kontakt',
        'login' => '/login',
        'signup' => '/opret-konto'
    ];
    
    return $url_mapping[$page] ?? '/';
}

// Navigation structure (with pretty URLs)
$navigation = [
    'forside' => 'Forside',
    'features' => 'Features', 
    'pricing' => 'Priser',
    'how' => 'Sådan virker det',
    'about' => 'Om os',
    'contact' => 'Kontakt'
];

// Page metadata
$pages = [
    'forside' => [
        'title' => 'Forside',
        'description' => 'Foreningsadministration gjort nemt - Alt samlet ét sted for jeres forening'
    ],
    'features' => [
        'title' => 'Funktioner',
        'description' => 'Se alle de funktioner edovo tilbyder til din forening'
    ],
    'pricing' => [
        'title' => 'Priser',
        'description' => 'Transparente priser for foreningsadministration'
    ],
    'how' => [
        'title' => 'Sådan virker det',
        'description' => 'Lær hvordan edovo kan hjælpe din forening'
    ],
    'about' => [
        'title' => 'Om os',
        'description' => 'Lær mere om teamet bag edovo'
    ],
    'contact' => [
        'title' => 'Kontakt',
        'description' => 'Kom i kontakt med edovo teamet'
    ],
    'login' => [
        'title' => 'Login',
        'description' => 'Log ind på din edovo konto'
    ],
    'signup' => [
        'title' => 'Opret konto',
        'description' => 'Opret en gratis edovo konto til din forening'
    ]
];

// Get current page from URL path
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);
$path = trim($path, '/');

// Check for query parameter fallback (if .htaccess doesn't work)
if (isset($_GET['page'])) {
    $current_page = $_GET['page'];
} else {
    // Map URL paths to page names
    $url_mapping = [
        '' => 'forside',           // / becomes forside
        'forside' => 'forside',    // /forside
        'funktioner' => 'features', // /funktioner
        'priser' => 'pricing',     // /priser  
        'saadan-virker-det' => 'how', // /saadan-virker-det
        'om-os' => 'about',        // /om-os
        'kontakt' => 'contact',    // /kontakt
        'login' => 'login',        // /login
        'opret-konto' => 'signup', // /opret-konto
        'signup' => 'signup'       // /signup (fallback)
    ];

    $current_page = $url_mapping[$path] ?? '404';
}

// Validate page exists
if ($current_page !== '404' && !isset($pages[$current_page])) {
    $current_page = '404';
}

// Debug mode (set to false in production)
$debug_mode = false;
if ($debug_mode) {
    error_log("Current page: $current_page");
    error_log("Request URI: $request_uri");
    error_log("Parsed path: $path");
}

// Set page title
$page_title = $site['title'];
if ($current_page !== 'forside' && isset($pages[$current_page])) {
    $page_title = $pages[$current_page]['title'] . ' - ' . $site['title'];
}
?>