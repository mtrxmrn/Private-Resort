<?php
session_start();
require_once 'linkmeta/linkmeta.php';
require_once 'View/Navigation.php';

// Front Controller


require_once 'controllers/HomeController.php';
require_once 'controllers/ContactUsController.php';
require_once 'controllers/LoginController.php';
require_once 'controllers/RegisterController.php';
require_once 'controllers/LogoutController.php';
require_once 'controllers/ProfileController.php';
require_once 'controllers/ReservationController.php';
require_once 'controllers/AboutUsController.php';

// Initialize the appropriate controller based on the requested page
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        $controller = new HomeController();
        break;
    case 'contact':
        $controller = new ContactUsController();
        break;
    case 'login':
        $controller = new LoginController();
        break;
    case 'register':
        $controller = new RegisterController();
        break;
    case 'profile':
        $controller = new ProfileController();
        break;
    case 'logout':
        $controller = new LogoutController();
        break;
    case 'reservation':
        $controller = new ReservationController();
        break;
    case 'aboutus':
        $controller = new AboutUsController();
        break;
    default:
        $controller = new HomeController();
        break;
}

// Process the request
$controller->controller();

require_once 'View/Footer.php';
require_once 'linkmeta/scripts.php';
?>
