<?php
// Include configuration
require_once 'config.php';

// Include header
include 'includes/header.php';

// Include navigation
include 'includes/navigation.php';

// Include the appropriate page content
switch($current_page) {
    case 'forside':
        include 'pages/home.php';
        break;
    case 'features':
        include 'pages/features.php';
        break;
    case 'pricing':
        include 'pages/pricing.php';
        break;
    case 'how':
        include 'pages/how.php';
        break;
    case 'about':
        include 'pages/about.php';
        break;
    case 'contact':
        include 'pages/contact.php';
        break;
    case 'login':
        include 'pages/login.php';
        break;
    case 'signup':
        include 'pages/signup.php';
        break;
    default:
        include 'pages/404.php';
        break;
}

// Include footer
include 'includes/footer.php';
?>