<?php
require_once 'linkmeta/linkmeta.php';
require_once 'View/admin/AdminNavbar.php';
require_once 'View/admin/AdminSidebar.php';

require_once 'controllers/admin/PendingController.php';
require_once 'controllers/admin/DashboardController.php';
require_once 'controllers/admin/ReservedController.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


switch ($page) {
    case 'home':
        $controller = new DashboardController();
        break;
    case 'pending':
        $controller = new PendingController();
        break;
    case 'reserved':
        $controller = new ReservedController();
        break;
    default:
        $controller = new DashboardController();
        break;
}

// Process the request
$controller->controller();

require_once 'linkmeta/scripts.php';
?>